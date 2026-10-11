class BookingWizard {
    constructor(config) {
        this.config = config || {};
        this.currentStep = 1;
        this.currentMonth = new Date(new Date().getFullYear(), new Date().getMonth(), 1);
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
        this.renderCalendar();
        this.syncBookingTypeSelectionUI();
    }

    setupStepNavigation() {
        document.querySelectorAll('.booking-option').forEach(option => {
            option.addEventListener('click', () => this.selectBookingType(option));
        });

        const nextStep1 = document.getElementById('next-step-1');
        if (nextStep1) {
            nextStep1.addEventListener('click', () => this.goToStep(2));
        }

        const prevStep2 = document.getElementById('prev-step-2');
        const nextStep2 = document.getElementById('next-step-2');
        if (prevStep2) prevStep2.addEventListener('click', () => this.goToStep(1));
        if (nextStep2) nextStep2.addEventListener('click', () => this.goToStep(3));

        const prevStep3 = document.getElementById('prev-step-3');
        if (prevStep3) prevStep3.addEventListener('click', () => this.goToStep(2));

        const nextStep3 = document.getElementById('next-step-3');
        if (nextStep3) nextStep3.addEventListener('click', () => this.goToStep(4));

        const prevStep4 = document.getElementById('prev-step-4');
        if (prevStep4) prevStep4.addEventListener('click', () => this.goToStep(3));

        const confirmButton = document.getElementById('confirm-booking');
        if (confirmButton) {
            confirmButton.addEventListener('click', () => this.confirmBooking());
        }

        const customTimeButton = document.getElementById('request-custom-time');
        if (customTimeButton) {
            customTimeButton.addEventListener('click', () => {
                alert('Please call our office to request a custom time.');
            });
        }

        const prevMonthButton = document.getElementById('prev-month');
        const nextMonthButton = document.getElementById('next-month');
        if (prevMonthButton) {
            prevMonthButton.addEventListener('click', () => {
                this.currentMonth = new Date(this.currentMonth.getFullYear(), this.currentMonth.getMonth() - 1, 1);
                this.renderCalendar();
            });
        }
        if (nextMonthButton) {
            nextMonthButton.addEventListener('click', () => {
                this.currentMonth = new Date(this.currentMonth.getFullYear(), this.currentMonth.getMonth() + 1, 1);
                this.renderCalendar();
            });
        }

        document.querySelectorAll('.time-slot').forEach(slot => {
            slot.addEventListener('click', () => {
                if (slot.classList.contains('unavailable')) {
                    return;
                }
                this.selectTime(slot.dataset.time);
            });
        });
    }

    syncBookingTypeSelectionUI() {
        const selectedType = this.bookingData.type;
        document.querySelectorAll('.booking-option').forEach(option => {
            const matches = option.getAttribute('data-booking-type') === selectedType;
            option.classList.toggle('selected', matches);
        });

        const typeDisplay = document.getElementById('booking-type-display');
        if (typeDisplay) {
            const label = selectedType && this.config.bookingTypes ? this.config.bookingTypes[selectedType] : 'Selected option';
            typeDisplay.textContent = label || 'Selected option';
        }
    }

    async selectBookingType(option) {
        const bookingType = option?.getAttribute('data-booking-type');
        this.bookingData.type = bookingType;

        document.querySelectorAll('.booking-option').forEach(item => {
            item.classList.toggle('selected', item === option);
        });

        const typeInput = document.getElementById('booking-type-input');
        if (typeInput) {
            typeInput.value = bookingType;
        }

        const nextButton = document.getElementById('next-step-1');
        if (nextButton) {
            nextButton.disabled = !bookingType;
        }

        const bookingTypeDisplay = document.getElementById('booking-type-display');
        const summaryType = document.getElementById('summary-type');
        const label = bookingType && this.config.bookingTypes ? this.config.bookingTypes[bookingType] : '';

        if (bookingTypeDisplay) {
            bookingTypeDisplay.textContent = label || 'Selected option';
        }

        if (summaryType) {
            summaryType.textContent = label || '-';
        }
    }

    async goToStep(step) {
        if (step > this.currentStep && !this.validateCurrentStep()) {
            return;
        }

        const target = document.getElementById(`step-${step}-content`);
        if (!target) {
            return;
        }

        document.querySelectorAll('.form-step').forEach(el => {
            el.classList.remove('active');
        });

        target.classList.add('active');
        this.currentStep = step;
        this.updateStepIndicators();

        if (step === 2) {
            this.renderCalendar();
            this.updateTimeSlots(this.getFallbackTimeSlots());
        } else if (step === 3) {
            this.populateContactForm();
            this.updateAppointmentSummary();
        } else if (step === 4) {
            this.updateReview();
        }
    }

    updateAppointmentSummary() {
        const summaryType = document.getElementById('summary-type');
        const summaryDateTime = document.getElementById('summary-datetime');

        if (summaryType) {
            const label = this.bookingData.type && this.config.bookingTypes ? this.config.bookingTypes[this.bookingData.type] : '-';
            summaryType.textContent = label || '-';
        }

        if (summaryDateTime) {
            if (this.bookingData.date && this.bookingData.time) {
                const formatted = new Date(`${this.bookingData.date}T12:00:00`).toLocaleDateString('en-US', {
                    weekday: 'short',
                    month: 'short',
                    day: 'numeric',
                    year: 'numeric'
                });
                summaryDateTime.textContent = `${formatted} • ${this.formatTimeLabel(this.bookingData.time)}`;
            } else {
                summaryDateTime.textContent = '-';
            }
        }
    }

    updateStepIndicators() {
        const steps = [1, 2, 3, 4];
        steps.forEach(step => {
            const circle = document.getElementById(`step-${step}`);
            const line = document.getElementById(`line-${step}-${step + 1}`);

            if (circle) {
                circle.classList.remove('active', 'inactive', 'completed');
                if (step < this.currentStep) {
                    circle.classList.add('completed');
                } else if (step === this.currentStep) {
                    circle.classList.add('active');
                } else {
                    circle.classList.add('inactive');
                }
            }

            if (line) {
                line.classList.toggle('completed', step < this.currentStep);
            }
        });

        const currentStepText = document.getElementById('current-step-text');
        if (currentStepText) {
            const labels = ['Select Booking Type', 'Select Date & Time', 'Contact Information', 'Review & Confirm'];
            currentStepText.textContent = labels[this.currentStep - 1] || 'Booking Wizard';
        }
    }

    renderCalendar() {
        const monthElement = document.getElementById('current-month');
        if (monthElement) {
            monthElement.textContent = this.currentMonth.toLocaleDateString('en-US', {
                month: 'long',
                year: 'numeric'
            });
        }

        const grid = document.getElementById('calendar-days');
        if (!grid) {
            return;
        }

        grid.innerHTML = '';

        const firstDay = new Date(this.currentMonth.getFullYear(), this.currentMonth.getMonth(), 1);
        const lastDay = new Date(this.currentMonth.getFullYear(), this.currentMonth.getMonth() + 1, 0);
        const leadingBlanks = firstDay.getDay();
        const today = new Date();
        const todayStart = new Date(today.getFullYear(), today.getMonth(), today.getDate());

        for (let i = 0; i < leadingBlanks; i++) {
            const empty = document.createElement('div');
            empty.className = 'calendar-day disabled opacity-0';
            empty.setAttribute('aria-hidden', 'true');
            grid.appendChild(empty);
        }

        for (let day = 1; day <= lastDay.getDate(); day++) {
            const date = new Date(this.currentMonth.getFullYear(), this.currentMonth.getMonth(), day);
            const button = document.createElement('button');
            const dateKey = date.toISOString().split('T')[0];
            button.type = 'button';
            button.textContent = day;
            button.className = 'calendar-day';
            button.dataset.date = dateKey;

            if (date < todayStart) {
                button.classList.add('disabled');
            }

            if (this.bookingData.date === dateKey) {
                button.classList.add('selected');
            }

            if (date.toDateString() === todayStart.toDateString()) {
                button.classList.add('today');
            }

            button.addEventListener('click', () => {
                if (button.classList.contains('disabled')) {
                    return;
                }
                this.selectDate(dateKey);
            });

            grid.appendChild(button);
        }

        const totalCells = grid.children.length;
        const remaining = (7 - (totalCells % 7)) % 7;
        for (let i = 0; i < remaining; i++) {
            const filler = document.createElement('div');
            filler.className = 'calendar-day disabled opacity-0';
            filler.setAttribute('aria-hidden', 'true');
            grid.appendChild(filler);
        }
    }

    selectDate(date) {
        this.bookingData.date = date;
        this.bookingData.time = null;

        const dateInput = document.getElementById('appointment-date-input');
        if (dateInput) {
            dateInput.value = date;
        }

        document.querySelectorAll('.calendar-day').forEach(day => {
            day.classList.toggle('selected', day.dataset.date === date);
        });

        const dateLabel = document.getElementById('selected-date-display');
        if (dateLabel) {
            const dateObj = new Date(`${date}T12:00:00`);
            dateLabel.textContent = dateObj.toLocaleDateString('en-US', {
                weekday: 'short',
                month: 'short',
                day: 'numeric',
                year: 'numeric'
            });
        }

        document.querySelectorAll('.time-slot').forEach(slot => {
            slot.classList.remove('selected');
        });

        this.fetchAvailableTimeSlots(date);
        this.updateAppointmentSummary();
    }

    getFallbackTimeSlots() {
        return ['9:00', '9:30', '10:00', '10:30', '11:00', '11:30', '1:00', '1:30', '2:30', '3:00', '3:30', '4:00'];
    }

    normalizeTime(timeValue) {
        if (!timeValue) return null;

        const clean = String(timeValue).trim().toLowerCase();
        if (clean.includes('am') || clean.includes('pm')) {
            const [timePart, suffix] = clean.split(/\s+/);
            const [hours, minutes] = timePart.split(':').map(Number);
            let hour24 = hours;
            if (suffix === 'pm' && hour24 < 12) hour24 += 12;
            if (suffix === 'am' && hour24 === 12) hour24 = 0;
            return `${String(hour24).padStart(2, '0')}:${String(minutes || 0).padStart(2, '0')}`;
        }

        const [hours, minutes] = clean.split(':').map(Number);
        return `${String(hours).padStart(2, '0')}:${String(minutes || 0).padStart(2, '0')}`;
    }

    formatTimeLabel(timeValue) {
        const [hours, minutes] = this.normalizeTime(timeValue).split(':').map(Number);
        const suffix = hours >= 12 ? 'PM' : 'AM';
        const hour12 = hours % 12 || 12;
        return `${hour12}:${String(minutes).padStart(2, '0')} ${suffix}`;
    }

    async fetchAvailableTimeSlots(date) {
        let availableSlots = this.getFallbackTimeSlots();

        try {
            if (this.config.checkAvailabilityUrl) {
                const response = await fetch(this.config.checkAvailabilityUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': this.config.csrfToken || ''
                    },
                    body: JSON.stringify({
                        date,
                        type: this.bookingData.type
                    })
                });

                const data = await response.json();
                if (data.success && Array.isArray(data.available_slots) && data.available_slots.length) {
                    availableSlots = data.available_slots;
                }
            }
        } catch (error) {
            console.error('Failed to fetch time slots:', error);
        }

        this.updateTimeSlots(availableSlots);
    }

    updateTimeSlots(availableSlots = []) {
        const validTimes = new Set((availableSlots || []).map(slot => this.normalizeTime(slot)));

        document.querySelectorAll('.time-slot').forEach(slot => {
            const value = this.normalizeTime(slot.dataset.time || slot.textContent);
            const allowed = validTimes.size ? validTimes.has(value) : true;
            const isUnavailable = slot.classList.contains('unavailable');
            const shouldBeUnavailable = !allowed || isUnavailable;

            slot.classList.toggle('unavailable', shouldBeUnavailable);
            slot.classList.toggle('selected', this.bookingData.time && this.normalizeTime(this.bookingData.time) === value);
            slot.setAttribute('aria-disabled', String(shouldBeUnavailable));
            slot.title = shouldBeUnavailable ? 'Unavailable' : 'Available';
        });

        const nextStep2 = document.getElementById('next-step-2');
        if (nextStep2) {
            nextStep2.disabled = !(this.bookingData.date && this.bookingData.time);
        }
    }

    selectTime(time) {
        if (!time) {
            return;
        }

        this.bookingData.time = time;
        const timeInput = document.getElementById('appointment-time-input');
        if (timeInput) {
            timeInput.value = time;
        }

        document.querySelectorAll('.time-slot').forEach(slot => {
            const matches = this.normalizeTime(slot.dataset.time) === this.normalizeTime(time);
            slot.classList.toggle('selected', matches && !slot.classList.contains('unavailable'));
        });

        const nextStep2 = document.getElementById('next-step-2');
        if (nextStep2) {
            nextStep2.disabled = !(this.bookingData.date && this.bookingData.time);
        }

        this.updateAppointmentSummary();
    }

    populateContactForm() {
        const firstNameInput = document.getElementById('first-name');
        if (firstNameInput && this.bookingData.contact.first_name) {
            firstNameInput.value = this.bookingData.contact.first_name;
        }

        const lastNameInput = document.getElementById('last-name');
        if (lastNameInput && this.bookingData.contact.last_name) {
            lastNameInput.value = this.bookingData.contact.last_name;
        }
    }

    updateReview() {
        const reviewType = document.getElementById('review-type');
        const reviewDateTime = document.getElementById('review-datetime');
        const reviewContact = document.getElementById('review-contact');
        const reviewEmail = document.getElementById('review-email');
        const reviewPhone = document.getElementById('review-phone');
        const reviewRelationship = document.getElementById('review-relationship');
        const reviewAttendees = document.getElementById('review-attendees');
        const reviewRequests = document.getElementById('review-requests');

        if (reviewType && this.bookingData.type) {
            reviewType.textContent = this.config.bookingTypes && this.config.bookingTypes[this.bookingData.type] ? this.config.bookingTypes[this.bookingData.type] : this.bookingData.type;
        }

        if (reviewDateTime && this.bookingData.date && this.bookingData.time) {
            const date = new Date(`${this.bookingData.date}T12:00:00`);
            const formattedDate = date.toLocaleDateString('en-US', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            reviewDateTime.textContent = `${formattedDate} at ${this.formatTimeLabel(this.bookingData.time)}`;
        }

        const firstName = this.bookingData.contact.first_name || document.getElementById('first-name')?.value || '';
        const lastName = this.bookingData.contact.last_name || document.getElementById('last-name')?.value || '';
        if (reviewContact) {
            reviewContact.textContent = [firstName, lastName].filter(Boolean).join(' ') || '-';
        }

        if (reviewEmail) reviewEmail.textContent = this.bookingData.contact.email || document.getElementById('email')?.value || '-';
        if (reviewPhone) reviewPhone.textContent = this.bookingData.contact.phone || document.getElementById('phone')?.value || '-';
        if (reviewRelationship) reviewRelationship.textContent = this.bookingData.contact.relationship || document.getElementById('relationship')?.value || '-';
        if (reviewAttendees) reviewAttendees.textContent = this.bookingData.contact.attendees || document.getElementById('attendees')?.value || '-';
        if (reviewRequests) {
            const specialRequests = this.bookingData.contact.special_requests || document.getElementById('special-requests')?.value || '';
            reviewRequests.innerHTML = specialRequests ? `<p class="text-gray-700">${specialRequests}</p>` : '<p class="text-gray-700">No special requests provided.</p>';
        }
    }

    validateCurrentStep() {
        switch (this.currentStep) {
            case 1:
                return !!this.bookingData.type;
            case 2:
                return !!(this.bookingData.date && this.bookingData.time);
            case 3: {
                const form = document.getElementById('contact-form');
                return !!form && form.checkValidity();
            }
            default:
                return true;
        }
    }

    setupEventListeners() {
        const form = document.getElementById('contact-form');
        if (form) {
            form.addEventListener('submit', (e) => this.handleFormSubmit(e));

            form.querySelectorAll('input, select, textarea').forEach(input => {
                input.addEventListener('change', (e) => {
                    const field = e.target.name || e.target.id;
                    if (!field) return;
                    this.bookingData.contact[field] = e.target.value;

                    if (field === 'first_name' || field === 'last_name') {
                        this.updateReview();
                    }
                });
            });
        }
    }

    confirmBooking() {
        const form = document.getElementById('contact-form');
        if (!form) {
            return;
        }

        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        this.handleFormSubmit({
            preventDefault() {},
            target: form
        });
    }

    async handleFormSubmit(e) {
        e.preventDefault();

        const form = e.target;
        const formData = new FormData(form);

        if (!formData.get('type')) {
            formData.set('type', this.bookingData.type || '');
        }

        if (!formData.get('appointment_date')) {
            formData.set('appointment_date', this.bookingData.date || '');
        }

        if (!formData.get('appointment_time')) {
            formData.set('appointment_time', this.bookingData.time || '');
        }

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
                window.location.href = data.redirect_url;
            } else {
                this.displayFormErrors(data.errors || {});
            }
        } catch (error) {
            console.error('Form submission failed:', error);
            alert('An error occurred. Please try again.');
        }
    }

    displayFormErrors(errors) {
        document.querySelectorAll('.error-message').forEach(el => el.remove());

        Object.entries(errors || {}).forEach(([field, messages]) => {
            const input = document.querySelector(`[name="${field}"]`) || document.getElementById(field);
            if (input) {
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message text-red-500 text-sm mt-1';
                errorDiv.textContent = Array.isArray(messages) ? messages[0] : messages;
                input.parentNode.appendChild(errorDiv);
            }
        });
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    window.bookingWizard = new BookingWizard(window.bookingData || {});
});