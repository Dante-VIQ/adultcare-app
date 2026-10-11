class BookingWizard {
    constructor(config) {
        this.config = config;
        this.currentStep = 1;
        this.bookingData = {
            type: null,
            date: null,
            time: null,
            contact: {}
        };
        this.init();
    }
    
    init() {
        this.setupStepNavigation();
        this.setupEventListeners();
        this.updateStepIndicators();
    }
    
    setupStepNavigation() {
        // Step 1: Booking Type
        document.querySelectorAll('.booking-option').forEach(option => {
            option.addEventListener('click', () => this.selectBookingType(option));
        });

        const nextStep1 = document.getElementById('next-step-1');
        if (nextStep1) {
            nextStep1.addEventListener('click', () => this.goToStep(2));
        }

        // Step 2: Date & Time
        const prevStep2 = document.getElementById('prev-step-2');
        const nextStep2 = document.getElementById('next-step-2');
        if (prevStep2) prevStep2.addEventListener('click', () => this.goToStep(1));
        if (nextStep2) nextStep2.addEventListener('click', () => this.goToStep(3));

        // Step 3: Contact Information
        const prevStep3 = document.getElementById('prev-step-3');
        if (prevStep3) prevStep3.addEventListener('click', () => this.goToStep(2));

        // Step 4: Review
        const prevStep4 = document.getElementById('prev-step-4');
        if (prevStep4) prevStep4.addEventListener('click', () => this.goToStep(3));
    }

    async selectBookingType(option) {
        const bookingType = option?.getAttribute('data-booking-type');
        this.bookingData.type = bookingType;

        // Update hidden input for form submission when present
        const typeInput = document.getElementById('booking-type-input');
        if (typeInput) {
            typeInput.value = bookingType;
        }

        // Enable next button
        const nextButton = document.getElementById('next-step-1');
        if (nextButton) {
            nextButton.disabled = !bookingType;
        }
    }
    
    async goToStep(step) {
        // Validate current step before proceeding
        if (step > this.currentStep && !this.validateCurrentStep()) {
            return;
        }
        
        // Hide all steps
        document.querySelectorAll('.form-step').forEach(el => {
            el.classList.remove('active');
        });
        
        // Show target step
        document.getElementById(`step-${step}-content`).classList.add('active');
        this.currentStep = step;
        this.updateStepIndicators();
        
        // Load data for step if needed
        if (step === 2) {
            await this.loadCalendarData();
        } else if (step === 3) {
            this.populateContactForm();
        } else if (step === 4) {
            this.updateReview();
        }
    }
    
    async loadCalendarData() {
        try {
            // Fetch available dates from server
            const response = await fetch(this.config.checkAvailabilityUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': this.config.csrfToken
                },
                body: JSON.stringify({
                    date: new Date().toISOString().split('T')[0],
                    type: this.bookingData.type
                })
            });
            
            const data = await response.json();
            
            if (data.success) {
                this.updateCalendar(data.available_slots);
            }
        } catch (error) {
            console.error('Failed to load calendar data:', error);
        }
    }
    
    selectDate(date) {
        this.bookingData.date = date;
        const dateInput = document.getElementById('appointment-date-input');
        if (dateInput) {
            dateInput.value = date;
        }

        // Fetch available time slots for this date
        this.fetchAvailableTimeSlots(date);
    }
    
    async fetchAvailableTimeSlots(date) {
        try {
            const response = await fetch(this.config.checkAvailabilityUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': this.config.csrfToken
                },
                body: JSON.stringify({
                    date: date,
                    type: this.bookingData.type
                })
            });
            
            const data = await response.json();
            
            if (data.success) {
                this.updateTimeSlots(data.available_slots);
            }
        } catch (error) {
            console.error('Failed to fetch time slots:', error);
        }
    }
    
    selectTime(time) {
        this.bookingData.time = time;
        const timeInput = document.getElementById('appointment-time-input');
        if (timeInput) {
            timeInput.value = time;
        }

        // Enable next button
        const nextStep2 = document.getElementById('next-step-2');
        if (nextStep2) {
            nextStep2.disabled = !time;
        }
    }

    populateContactForm() {
        // Pre-populate form with any saved data
        const firstNameInput = document.getElementById('first-name');
        if (firstNameInput && this.bookingData.contact.first_name) {
            firstNameInput.value = this.bookingData.contact.first_name;
        }

        const lastNameInput = document.getElementById('last-name');
        if (lastNameInput && this.bookingData.contact.last_name) {
            lastNameInput.value = this.bookingData.contact.last_name;
        }
        // Add more fields as needed
    }
    
    updateReview() {
        // Update the review section with all collected data
        const reviewType = document.getElementById('review-type');
        const reviewDateTime = document.getElementById('review-datetime');
        const reviewContact = document.getElementById('review-contact');
        
        if (reviewType && this.bookingData.type) {
            reviewType.textContent = this.config.bookingTypes[this.bookingData.type] || '';
        }
        
        if (reviewDateTime && this.bookingData.date && this.bookingData.time) {
            const date = new Date(this.bookingData.date);
            const formattedDate = date.toLocaleDateString('en-US', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            reviewDateTime.textContent = `${formattedDate} at ${this.bookingData.time}`;
        }
        
        if (reviewContact && this.bookingData.contact.first_name) {
            reviewContact.textContent = 
                `${this.bookingData.contact.first_name} ${this.bookingData.contact.last_name || ''}`;
        }
    }
    
    validateCurrentStep() {
        switch (this.currentStep) {
            case 1:
                return !!this.bookingData.type;
            case 2:
                return !!(this.bookingData.date && this.bookingData.time);
            case 3:
                // Basic form validation
                const form = document.getElementById('contact-form');
                return !!form && form.checkValidity();
            default:
                return true;
        }
    }
    
    updateStepIndicators() {
        // Update your step indicators
        // Keep your existing step indicator logic
    }
    
    setupEventListeners() {
        // Form submission
        const form = document.getElementById('contact-form');
        if (!form) {
            return;
        }

        form.addEventListener('submit', (e) => this.handleFormSubmit(e));

        // Input change listeners for real-time data capture
        const inputs = form.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('change', (e) => {
                const field = e.target.name || e.target.id;
                if (!field) {
                    return;
                }
                this.bookingData.contact[field] = e.target.value;
            });
        });
    }
    
    async handleFormSubmit(e) {
        e.preventDefault();
        
        const form = e.target;
        const formData = new FormData(form);
        
        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            });
            
            const data = await response.json();
            
            if (data.success) {
                // Redirect to confirmation page
                window.location.href = data.redirect_url;
            } else {
                // Handle validation errors
                this.displayFormErrors(data.errors);
            }
        } catch (error) {
            console.error('Form submission failed:', error);
            alert('An error occurred. Please try again.');
        }
    }
    
    displayFormErrors(errors) {
        // Clear previous errors
        document.querySelectorAll('.error-message').forEach(el => el.remove());
        
        // Display new errors
        Object.entries(errors || {}).forEach(([field, messages]) => {
            const input = document.querySelector(`[name="${field}"]`);
            if (input) {
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message text-red-500 text-sm mt-1';
                errorDiv.textContent = messages[0];
                input.parentNode.appendChild(errorDiv);
            }
        });
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const wizard = new BookingWizard(window.bookingData || {});
});