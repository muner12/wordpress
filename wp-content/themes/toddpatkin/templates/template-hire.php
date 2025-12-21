<?php

/**
 * Template Name: Hire Todd
 */
get_header();
?>
<style>
    /* Mobile Responsive Styles for Hire Todd Section */
    @media (max-width: 768px) {
        /* Adjust container padding for mobile */
        .hire-todd-section .container {
            padding-left: 15px;
            padding-right: 15px;
        }
        
        /* Adjust main content container spacing */
        #calendarSection .col-12,
        #timeSlotSection .col-12 {
            padding-left: 10px;
            padding-right: 10px;
        }
        
        /* Adjust inner container padding */
        #calendarSection .border,
        #timeSlotSection .border {
            padding: 20px 15px !important;
        }
        
        /* Adjust profile and calendar column padding */
        #calendarSection .col-md-4,
        #calendarSection .col-md-8,
        #timeSlotSection .col-md-4,
        #timeSlotSection .col-md-8 {
            padding: 15px !important;
        }
        
        /* Center time format buttons on mobile */
        #timeSlotSection .d-flex.justify-content-end {
            justify-content: center !important;
        }
        
        /* Adjust time format button sizes for mobile */
        .time-format-btn {
            font-size: 0.875rem !important;
            padding: 8px 16px !important;
        }
        
        /* Adjust navigation arrow buttons for mobile */
        #backToCalendar,
        #calendarSection .btn-link {
            min-width: 35px !important;
            padding: 8px !important;
            font-size: 1rem !important;
        }
        
        /* Adjust calendar navigation buttons */
        #calendarSection .d-flex.justify-content-between .btn-link {
            min-width: 35px !important;
            padding: 8px !important;
        }
        
        /* Adjust Next button for mobile */
        #nextToTimeSlots {
            padding: 10px 20px !important;
            font-size: 0.9rem !important;
        }
        
        /* Adjust time slot items for mobile */
        .time-slot-item {
            padding: 12px 15px !important;
            font-size: 0.95rem !important;
        }
        
        /* Adjust date navigation text */
        #timeSlotSection .ms-2 {
            font-size: 0.95rem !important;
        }
    }
    
    @media (max-width: 576px) {
        /* Extra small devices - further adjustments */
        .hire-todd-section .container {
            padding-left: 10px;
            padding-right: 10px;
        }
        
        #calendarSection .col-12,
        #timeSlotSection .col-12 {
            padding-left: 5px;
            padding-right: 5px;
        }
        
        #calendarSection .border,
        #timeSlotSection .border {
            padding: 15px 10px !important;
        }
        
        #calendarSection .col-md-4,
        #calendarSection .col-md-8,
        #timeSlotSection .col-md-4,
        #timeSlotSection .col-md-8 {
            padding: 10px !important;
        }
        
        .time-format-btn {
            font-size: 0.8rem !important;
            padding: 6px 12px !important;
        }
        
        .time-slot-item {
            padding: 10px 12px !important;
            font-size: 0.9rem !important;
        }
    }
</style>

<!-- Hire Todd Section -->
<section class="hire-todd-section bg-white" style="padding: 80px 0;">
    <div class="container">
        <!-- Header Section -->
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold text-uppercase mb-3">
                <span class="text-primary-blue">HIRE</span> <span class="text-warning">TODD PATKIN</span>
            </h2>
            <p class="text-muted lead mb-0">Lorem ipsum dolor sit amet consectetur. Mattis eu quisque nulla</p>
        </div>

        <!-- Main Content Container -->
        <div class="row g-0 justify-content-center" id="calendarSection">
            <div class="col-12" style="max-width: 1220px; margin: 0 auto;">
                <div class="border rounded p-4" style="background: #fff; border-color: #e0e0e0 !important; border-width: 1px;">
                    <div class="row g-0">
                        <!-- Left Block: Profile Card -->
                        <div class="col-12 col-md-4 p-4 d-flex flex-column justify-content-between">
                            <div class="text-center mb-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-todd-1eb55f.png" alt="Todd Patkin" 
                                    class="img-fluid rounded" 
                                    style="max-width: 100%; height: auto; object-fit: cover;">
                            </div>
                            <div class="text-dark text-center" style="font-size: 0.9rem; font-weight: 500;">
                                Todd Patkin
                            </div>
                        </div>

                        <!-- Right Block: Calendar -->
                        <div class="col-12 col-md-8 p-4">
                            <!-- Calendar Navigation -->
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <button class="btn btn-link text-dark p-2" id="prevMonthBtn" style="border: none; background: none; min-width: 40px;">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <div class="d-flex align-items-center gap-2">
                                    <select class="form-select form-select-sm border" id="monthSelect"
                                        style="width: auto; display: inline-block; background: #fff; color: #000;">
                                        <option>June</option>
                                        <option>July</option>
                                        <option>August</option>
                                        <option>September</option>
                                        <option>October</option>
                                    </select>
                                    <select class="form-select form-select-sm border" id="yearSelect"
                                        style="width: auto; display: inline-block; background: #fff; color: #000;">
                                        <option>2025</option>
                                        <option>2024</option>
                                        <option>2026</option>
                                    </select>
                                </div>
                                <button class="btn btn-link text-dark p-2" id="nextMonthBtn" style="border: none; background: none; min-width: 40px;">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>

                            <!-- Day Labels -->
                            <div class="calendar-day-labels mb-2" style="display: grid; grid-template-columns: repeat(7, 1fr); text-align: center; font-weight: 600; font-size: 0.85rem; color: #666; padding: 0 4px;">
                                <div>SU</div>
                                <div>MO</div>
                                <div>TU</div>
                                <div>WE</div>
                                <div>TH</div>
                                <div>FR</div>
                                <div>SA</div>
                            </div>

                            <!-- Calendar Grid -->
                            <div class="calendar-grid mb-4" style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 4px; text-align: center;">
                                <!-- Calendar will be generated by JavaScript -->
                            </div>

                            <!-- Timezone Selector -->
                            <div class="timezone-selector mt-4">
                                <label class="mb-2" style="color: #666 !important; font-size: 0.9rem; display: block; font-weight: 500;">Timezone</label>
                                <select class="form-select border" id="timezoneSelect"
                                    style="background: #fff !important; color: #000 !important; border-color: #ddd !important;">
                                    <option value="Asia/Karachi" selected>Asia/Karachi</option>
                                    <option value="America/New_York">America/New_York</option>
                                    <option value="America/Los_Angeles">America/Los_Angeles</option>
                                    <option value="Europe/London">Europe/London</option>
                                    <option value="Asia/Tokyo">Asia/Tokyo</option>
                                    <option value="Australia/Sydney">Australia/Sydney</option>
                                </select>
                            </div>
                            
                            <!-- Next Button -->
                            <div class="mt-4 text-end">
                                <button class="btn btn-warning" id="nextToTimeSlots">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Time Slot Selection Section (Hidden by default) -->
        <div class="row g-0 justify-content-center" id="timeSlotSection" style="display: none !important;">
            <div class="col-12" style="max-width: 1220px; margin: 0 auto;">
                <div class="border rounded p-4" style="background: #fff; border-color: #e0e0e0 !important; border-width: 1px;">
                    <div class="row g-0">
                        <!-- Left Block: Profile Card -->
                        <div class="col-12 col-md-4 p-4 d-flex flex-column justify-content-between">
                            <div class="text-center mb-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-todd-1eb55f.png" alt="Todd Patkin" 
                                    class="img-fluid rounded" 
                                    style="max-width: 100%; height: auto; object-fit: cover;">
                            </div>
                            <div class="text-dark text-center" style="font-size: 0.9rem; font-weight: 500;">
                                Todd Patkin
                            </div>
                        </div>

                        <!-- Right Block: Time Slot Selection -->
                        <div class="col-12 col-md-8 p-4">
                            <!-- Time Format Toggle (Top Right) -->
                            <div class="d-flex align-items-center justify-content-end mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <button class="btn btn-sm px-3 py-2 time-format-btn rounded" id="format12h" 
                                        style="background: #ffc107; color: #fff; border: none; font-weight: 500; border-radius: 6px !important;">
                                        12 hours
                                    </button>
                                    <button class="btn btn-sm px-3 py-2 time-format-btn rounded" id="format24h" 
                                        style="background: #fff; color: #000; border: 1px solid #ffc107; font-weight: 500; border-radius: 6px !important;">
                                        24 hours
                                    </button>
                                </div>
                            </div>

                            <!-- Date Navigation -->
                            <div class="d-flex align-items-center mb-4">
                                <button class="btn btn-link text-dark p-2" id="backToCalendar" style="border: none; background: none; min-width: 40px; text-decoration: none;">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <span class="ms-2" id="selectedDateDisplay" style="font-size: 1rem; font-weight: 500; color: #000;">Fri, 14</span>
                            </div>

                            <!-- Time Slot List -->
                            <div class="time-slot-list">
                                <div class="time-slot-item mb-3 p-3 border rounded" 
                                    data-time="14:00" 
                                    style="border-color: #ddd !important; cursor: pointer; background: #fff; color: #000; border: 1px solid #ddd !important; border-radius: 8px !important;">
                                    <span style="font-size: 1rem; font-weight: 500; color: #000;">14:00</span>
                                </div>
                                <div class="time-slot-item mb-3 p-3 border rounded" 
                                    data-time="15:00" 
                                    style="border-color: #ddd !important; cursor: pointer; background: #fff; color: #000; border: 1px solid #ddd !important; border-radius: 8px !important;">
                                    <span style="font-size: 1rem; font-weight: 500; color: #000;">15:00</span>
                                </div>
                                <div class="time-slot-item mb-3 p-3 border rounded" 
                                    data-time="16:00" 
                                    style="border-color: #ddd !important; cursor: pointer; background: #fff; color: #000; border: 1px solid #ddd !important; border-radius: 8px !important;">
                                    <span style="font-size: 1rem; font-weight: 500; color: #000;">16:00</span>
                                </div>
                                <div class="time-slot-item mb-3 p-3 border rounded" 
                                    data-time="17:00" 
                                    style="border-color: #ddd !important; cursor: pointer; background: #fff; color: #000; border: 1px solid #ddd !important; border-radius: 8px !important;">
                                    <span style="font-size: 1rem; font-weight: 500; color: #000;">17:00</span>
                                </div>
                                <div class="time-slot-item mb-3 p-3 border rounded" 
                                    data-time="18:00" 
                                    style="border-color: #ddd !important; cursor: pointer; background: #fff; color: #000; border: 1px solid #ddd !important; border-radius: 8px !important;">
                                    <span style="font-size: 1rem; font-weight: 500; color: #000;">18:00</span>
                                </div>
                            </div>
                            
                            <!-- Next Button -->
                            <div class="mt-4 text-end">
                                <button class="btn btn-warning" id="nextToDetails">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enter Details Section (Hidden by default) -->
        <div class="row g-0 justify-content-center" id="detailsSection" style="display: none !important;">
            <div class="col-12" style="max-width: 1220px; margin: 0 auto;">
                <div class="border rounded p-4" style="background: #fff; border-color: #e0e0e0 !important; border-width: 1px;">
                    <div class="row g-0">
                        <!-- Left Block: Profile Card -->
                        <div class="col-12 col-md-4 p-4 d-flex flex-column justify-content-between">
                            <div class="text-center mb-4">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-todd-1eb55f.png" alt="Todd Patkin" 
                                    class="img-fluid rounded" 
                                    style="max-width: 100%; height: auto; object-fit: cover;">
                            </div>
                            <div class="text-dark text-center" style="font-size: 0.9rem; font-weight: 500;">
                                Todd Patkin
                            </div>
                        </div>

                        <!-- Right Block: Enter Details Form -->
                        <div class="col-12 col-md-8 p-4">
                            <!-- Navigation -->
                            <div class="d-flex align-items-center mb-4">
                                <button class="btn btn-link text-dark p-2" id="backToTimeSlots" style="border: none; background: none; min-width: 40px; text-decoration: none;">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <span class="ms-2" style="font-size: 1rem; font-weight: 500; color: #000;">Enter Details</span>
                            </div>

                            <!-- Form -->
                            <form id="meetingDetailsForm">
                                <div class="mb-4">
                                    <label for="yourName" class="form-label mb-2" style="color: #000; font-weight: 500; font-size: 0.95rem;">
                                        Your Name <span style="color: #dc3545;">*</span>
                                    </label>
                                    <input type="text" class="form-control border rounded" id="yourName" 
                                        placeholder="Please enter your name" required
                                        style="border-color: #ddd !important; border-radius: 8px !important; padding: 12px;">
                                </div>

                                <div class="mb-4">
                                    <label for="yourEmail" class="form-label mb-2" style="color: #000; font-weight: 500; font-size: 0.95rem;">
                                        Your Email <span style="color: #dc3545;">*</span>
                                    </label>
                                    <input type="email" class="form-control border rounded" id="yourEmail" 
                                        placeholder="Please enter your email" required
                                        style="border-color: #ddd !important; border-radius: 8px !important; padding: 12px;">
                                </div>

                                <div class="mb-4">
                                    <label for="meetingAbout" class="form-label mb-2" style="color: #000; font-weight: 500; font-size: 0.95rem;">
                                        What is this meeting about?
                                    </label>
                                    <textarea class="form-control border rounded" id="meetingAbout" rows="4" 
                                        placeholder="Type your message here"
                                        style="border-color: #ddd !important; border-radius: 8px !important; padding: 12px; resize: vertical;"></textarea>
                                </div>

                                <!-- Schedule Meeting Button -->
                                <div class="text-end mt-4">
                                    <button type="submit" class="btn btn-warning px-4 py-2" 
                                        style="background: #ffc107; color: #000; border: none; font-weight: 500; border-radius: 8px !important;">
                                        Schedule Meeting
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Meeting Success Modal -->
<div class="modal fade" id="meetingSuccessModal" tabindex="-1" aria-labelledby="meetingSuccessModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background: #fff; border-radius: 12px; border: none; box-shadow: 0 4px 20px rgba(0,0,0,0.15); padding: 0;">
            <div class="modal-body p-5" style="padding: 2.5rem !important;">
                <div class="text-center">
                    <!-- Success Icon -->
                    <div class="mb-4 d-flex justify-content-center">
                        <div style="width: 90px; height: 90px; border-radius: 50%; background: #a8e6cf; display: flex; align-items: center; justify-content: center; border: none;">
                            <div style="width: 70px; height: 70px; border-radius: 50%; background: #17a2b8; display: flex; align-items: center; justify-content: center; border: none;">
                                <i class="fas fa-check" style="color: #fff; font-size: 2.5rem; font-weight: bold;"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Heading -->
                    <h2 class="mb-3" style="color: #189783; font-weight: bold; font-size: 1.75rem; margin-bottom: 1rem !important;">Successfull</h2>
                    
                    <!-- Message -->
                    <p id="meetingSuccessMessage" class="mb-4" style="color: #666; font-size: 1rem; line-height: 1.5; margin-bottom: 1.5rem !important;">
                        You're meeting is being scheduled with "Todd Patkin" on 28 Nov 2025
                    </p>
                    
                    <!-- Ok Button -->
                    <button type="button" class="btn px-5 py-2" data-bs-dismiss="modal" 
                        style="background: #ffc107; color: #000; border: none; font-weight: 500; border-radius: 8px; min-width: 100px; box-shadow: none; outline: none;">
                        Ok
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle between calendar, time slot, and details sections
    const calendarSection = document.getElementById('calendarSection');
    const timeSlotSection = document.getElementById('timeSlotSection');
    const detailsSection = document.getElementById('detailsSection');
    const nextButton = document.getElementById('nextToTimeSlots');
    const nextToDetailsButton = document.getElementById('nextToDetails');
    const backButton = document.getElementById('backToCalendar');
    const backToTimeSlotsButton = document.getElementById('backToTimeSlots');

    if (nextButton) {
        nextButton.addEventListener('click', function() {
            if (calendarSection) {
                calendarSection.style.display = 'none';
            }
            if (timeSlotSection) {
                timeSlotSection.style.display = 'flex';
            }
        });
    }

    if (backButton) {
        backButton.addEventListener('click', function() {
            if (timeSlotSection) {
                timeSlotSection.style.display = 'none';
            }
            if (calendarSection) {
                calendarSection.style.display = 'flex';
            }
        });
    }

    // Toggle from time slots to details form
    if (nextToDetailsButton) {
        nextToDetailsButton.addEventListener('click', function() {
            if (timeSlotSection) {
                timeSlotSection.style.display = 'none';
            }
            if (detailsSection) {
                detailsSection.style.display = 'flex';
            }
        });
    }

    // Toggle back from details to time slots
    if (backToTimeSlotsButton) {
        backToTimeSlotsButton.addEventListener('click', function() {
            if (detailsSection) {
                detailsSection.style.display = 'none';
            }
            if (timeSlotSection) {
                timeSlotSection.style.display = 'flex';
            }
        });
    }

    // Handle meeting details form submission
    const meetingDetailsForm = document.getElementById('meetingDetailsForm');
    const meetingSuccessModal = new bootstrap.Modal(document.getElementById('meetingSuccessModal'));
    
    let selectedDate = null;
    let selectedTime = null;

    if (meetingDetailsForm) {
        meetingDetailsForm.addEventListener('submit', function(e) {
            e.preventDefault();
            let dateText = '28 Nov 2025';
            if (selectedDate) {
                dateText = formatDateForDisplay(selectedDate);
            }
            const timeText = selectedTime || '15:00';
            
            const modalMessage = document.getElementById('meetingSuccessMessage');
            if (modalMessage) {
                modalMessage.textContent = `You're meeting is being scheduled with "Todd Patkin" on ${dateText} at ${timeText}`;
            }
            
            meetingSuccessModal.show();
            meetingDetailsForm.reset();
        });
    }

    // Time format toggle functionality
    let currentTimeFormat = '12'; // Default to 12-hour format
    const format12h = document.getElementById('format12h');
    const format24h = document.getElementById('format24h');

    // Function to convert 24-hour to 12-hour format
    function convertTo12Hour(time24) {
        const [hours, minutes] = time24.split(':');
        const hour = parseInt(hours);
        const ampm = hour >= 12 ? 'PM' : 'AM';
        const hour12 = hour % 12 || 12;
        return `${hour12}:${minutes} ${ampm}`;
    }

    // Function to update time slot displays
    function updateTimeSlotFormat(format) {
        const timeSlotItems = document.querySelectorAll('.time-slot-item');
        timeSlotItems.forEach(function(item) {
            const time24 = item.getAttribute('data-time');
            const span = item.querySelector('span');
            
            if (format === '12') {
                // Convert to 12-hour format
                span.textContent = convertTo12Hour(time24);
            } else {
                // Show 24-hour format
                span.textContent = time24;
            }
        });
    }

    if (format12h && format24h) {
        format12h.addEventListener('click', function() {
            currentTimeFormat = '12';
            format12h.style.background = '#ffc107';
            format12h.style.color = '#fff';
            format12h.style.border = 'none';
            format24h.style.background = '#fff';
            format24h.style.color = '#000';
            format24h.style.border = '1px solid #ffc107';
            updateTimeSlotFormat('12');
        });

        format24h.addEventListener('click', function() {
            currentTimeFormat = '24';
            format24h.style.background = '#ffc107';
            format24h.style.color = '#fff';
            format24h.style.border = 'none';
            format12h.style.background = '#fff';
            format12h.style.color = '#000';
            format12h.style.border = '1px solid #ffc107';
            updateTimeSlotFormat('24');
        });
    }

    // Initialize time slots with 12-hour format (default)
    updateTimeSlotFormat('12');

    // Time slot selection
    const timeSlotItems = document.querySelectorAll('.time-slot-item');
    timeSlotItems.forEach(function(item) {
        item.addEventListener('click', function() {
            // Remove selected class from all items
            timeSlotItems.forEach(function(slot) {
                slot.classList.remove('selected');
                slot.style.background = '#fff';
                slot.style.borderColor = '#ddd';
                slot.style.color = '#000';
                const slotSpan = slot.querySelector('span');
                if (slotSpan) {
                    slotSpan.style.color = '#000';
                }
            });
            
            // Add selected class to clicked item
            this.classList.add('selected');
            this.style.background = '#f5f5f5';
            this.style.borderColor = '#0d6efd';
            this.style.color = '#0d6efd';
            const selectedSpan = this.querySelector('span');
            if (selectedSpan) {
                selectedSpan.style.color = '#0d6efd';
            }
            
            // Store selected time (always in 24-hour format)
            selectedTime = this.getAttribute('data-time');
        });
    });

    // Calendar Functionality
    let currentDate = new Date();
    const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 
                       'July', 'August', 'September', 'October', 'November', 'December'];
    const dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

    function formatDateForDisplay(date) {
        const dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 
                           'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        return `${dayNames[date.getDay()]}, ${date.getDate()} ${monthNames[date.getMonth()]} ${date.getFullYear()}`;
    }

    function generateCalendar(year, month) {
        const calendarGrid = document.querySelector('.calendar-grid');
        if (!calendarGrid) return;

        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const daysInPrevMonth = new Date(year, month, 0).getDate();
        
        calendarGrid.innerHTML = '';

        // Previous month dates
        for (let i = firstDay - 1; i >= 0; i--) {
            const day = daysInPrevMonth - i;
            const dateDiv = document.createElement('div');
            dateDiv.style.cssText = 'font-size: 0.9rem; padding: 10px 4px; color: #999; cursor: pointer;';
            dateDiv.textContent = day;
            calendarGrid.appendChild(dateDiv);
        }

        // Current month dates
        for (let day = 1; day <= daysInMonth; day++) {
            const dateDiv = document.createElement('div');
            dateDiv.style.cssText = 'font-size: 0.9rem; padding: 10px 4px; color: #000; cursor: pointer; font-weight: 500;';
            dateDiv.textContent = day;
            dateDiv.dataset.date = `${year}-${month + 1}-${day}`;
            
            // Check if this is today
            const today = new Date();
            if (year === today.getFullYear() && month === today.getMonth() && day === today.getDate()) {
                dateDiv.style.background = '#f0f0f0';
            }

            dateDiv.addEventListener('click', function() {
                // Remove selection from all dates
                calendarGrid.querySelectorAll('div').forEach(function(d) {
                    d.style.background = '';
                    d.style.border = '';
                    d.style.borderRadius = '';
                });

                // Highlight selected date
                this.style.background = '#e3f2fd';
                this.style.border = '2px solid #0d6efd';
                this.style.borderRadius = '4px';

                // Store selected date
                const dateParts = this.dataset.date.split('-');
                selectedDate = new Date(parseInt(dateParts[0]), parseInt(dateParts[1]) - 1, parseInt(dateParts[2]));
            });

            calendarGrid.appendChild(dateDiv);
        }

        // Next month dates
        const totalCells = calendarGrid.children.length;
        const remainingCells = 42 - totalCells; // 6 rows * 7 days
        for (let day = 1; day <= remainingCells; day++) {
            const dateDiv = document.createElement('div');
            dateDiv.style.cssText = 'font-size: 0.9rem; padding: 10px 4px; color: #999; cursor: pointer;';
            dateDiv.textContent = day;
            calendarGrid.appendChild(dateDiv);
        }
    }

    function updateCalendarDisplay() {
        const monthSelect = document.getElementById('monthSelect');
        const yearSelect = document.getElementById('yearSelect');
        
        if (monthSelect) {
            monthSelect.value = monthNames[currentDate.getMonth()];
        }
        if (yearSelect) {
            yearSelect.value = currentDate.getFullYear();
        }

        generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
    }

    // Initialize calendar
    updateCalendarDisplay();

    // Month/Year dropdowns
    const monthSelect = document.getElementById('monthSelect');
    const yearSelect = document.getElementById('yearSelect');

    if (monthSelect) {
        // Populate month options
        monthSelect.innerHTML = '';
        monthNames.forEach((month, index) => {
            const option = document.createElement('option');
            option.value = index;
            option.textContent = month;
            if (index === currentDate.getMonth()) {
                option.selected = true;
            }
            monthSelect.appendChild(option);
        });

        monthSelect.addEventListener('change', function() {
            currentDate.setMonth(parseInt(this.value));
            updateCalendarDisplay();
        });
    }

    if (yearSelect) {
        // Populate year options (current year ± 5 years)
        yearSelect.innerHTML = '';
        const currentYear = currentDate.getFullYear();
        for (let year = currentYear - 2; year <= currentYear + 3; year++) {
            const option = document.createElement('option');
            option.value = year;
            option.textContent = year;
            if (year === currentYear) {
                option.selected = true;
            }
            yearSelect.appendChild(option);
        }

        yearSelect.addEventListener('change', function() {
            currentDate.setFullYear(parseInt(this.value));
            updateCalendarDisplay();
        });
    }

    // Previous/Next month buttons
    const prevMonthButton = document.getElementById('prevMonthBtn');
    const nextMonthButton = document.getElementById('nextMonthBtn');

    if (prevMonthButton) {
        prevMonthButton.addEventListener('click', function() {
            currentDate.setMonth(currentDate.getMonth() - 1);
            updateCalendarDisplay();
        });
    }

    if (nextMonthButton) {
        nextMonthButton.addEventListener('click', function() {
            currentDate.setMonth(currentDate.getMonth() + 1);
            updateCalendarDisplay();
        });
    }

    // Update date display in time slot section when navigating from calendar
    if (nextButton) {
        nextButton.addEventListener('click', function() {
            if (selectedDate) {
                const dateDisplay = document.getElementById('selectedDateDisplay');
                if (dateDisplay) {
                    dateDisplay.textContent = formatDateForDisplay(selectedDate);
                }
            }
        });
    }
});
</script>

<?php
get_footer();
?>

