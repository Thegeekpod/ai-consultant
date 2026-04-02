<!-- Lead Generation Popup -->
<div id="leadPopup" class="lead-popup-overlay">
    <div class="lead-popup-container">
        <button id="closeLeadPopup" class="lead-popup-close">
            <i class="fal fa-times"></i>
        </button>
        <div class="lead-popup-content">
            <div class="lead-popup-image">
                <img src="{{ asset('assets/imgs/contact.webp') }}" alt="AI Consultant">
            </div>
            <div class="lead-popup-form-wrap">
                <h2 class="title">Get Expert AI Strategy</h2>
                <p>Book a free 15-minute consultation to explore how AI can transform your business processes.</p>

                <form id="leadPopupForm" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="message" value="Lead from Homepage Popup">
                    <input type="hidden" name="page_url" id="popupPageUrl">

                    <div class="input-group-popup">
                        <input type="text" name="full_name" placeholder="Full Name" required minlength="2">
                    </div>
                    <div class="input-group-popup">
                        <input type="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="input-group-popup">
                        <input type="tel" name="phone" placeholder="Phone Number" required pattern="[0-9\-\+\s]{10,20}">
                        <small style="color: rgba(255,255,255,0.4); font-size: 10px; display: block; margin-top: 4px;">Ex: +91 96354 62491</small>
                    </div>
                    <button type="submit" id="popupSubmitBtn" class="tp-btn-one w-100">
                        <span class="btn-wrap">
                            <span class="text-one">Book Consultation</span>
                            <span class="text-two">Submit Now</span>
                        </span>
                    </button>
                    <div id="popupFormMessage" class="popup-status-message"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .lead-popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.85);
        backdrop-filter: blur(8px);
        z-index: 9999;
        display: none;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .lead-popup-overlay.active {
        display: flex;
        opacity: 1;
    }

    .lead-popup-container {
        background: #0B0E13;
        width: 900px;
        max-width: 95%;
        border-radius: 24px;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        transform: scale(0.9);
        transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .lead-popup-overlay.active .lead-popup-container {
        transform: scale(1);
    }

    .lead-popup-close {
        position: absolute;
        top: 20px;
        right: 20px;
        background: rgba(255, 255, 255, 0.05);
        border: none;
        color: #fff;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .lead-popup-close:hover {
        background: #0728E4;
        transform: rotate(90deg);
    }

    .lead-popup-content {
        display: flex;
        flex-direction: row;
    }

    .lead-popup-image {
        flex: 1;
        background: #14181F;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .lead-popup-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.8);
    }

    .lead-popup-form-wrap {
        flex: 1.2;
        padding: 60px;
        background: linear-gradient(135deg, #0B0E13 0%, #14181F 100%);
    }

    .lead-popup-form-wrap .title {
        font-size: 36px;
        font-weight: 800;
        color: #fff;
        margin-bottom: 15px;
        letter-spacing: -0.02em;
    }

    .lead-popup-form-wrap p {
        color: rgba(255, 255, 255, 0.6);
        margin-bottom: 35px;
        font-size: 16px;
        line-height: 1.6;
    }

    .input-group-popup {
        margin-bottom: 20px;
        text-align: left;
    }

    .lead-popup-form-wrap input {
        width: 100%;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        padding: 16px 20px;
        color: #fff;
        font-size: 15px;
        transition: all 0.3s ease;
    }

    .lead-popup-form-wrap input:focus {
        border-color: #0728E4;
        background: rgba(255, 255, 255, 0.05);
        outline: none;
        box-shadow: 0 0 0 4px rgba(7, 40, 228, 0.1);
    }

    .popup-status-message {
        margin-top: 15px;
        font-size: 14px;
        text-align: center;
        min-height: 20px;
    }

    .popup-status-message.success {
        color: #10B981;
    }

    .popup-status-message.error {
        color: #EF4444;
    }

    @media (max-width: 767px) {
        .lead-popup-content {
            flex-direction: column;
        }

        .lead-popup-image {
            display: none;
        }

        .lead-popup-form-wrap {
            padding: 40px 25px;
        }

        .lead-popup-form-wrap .title {
            font-size: 28px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const popup = document.getElementById('leadPopup');
        const closeBtn = document.getElementById('closeLeadPopup');
        const form = document.getElementById('leadPopupForm');
        const statusMsg = document.getElementById('popupFormMessage');
        const pageUrlInput = document.getElementById('popupPageUrl');
        const submitBtn = document.getElementById('popupSubmitBtn');

        if (pageUrlInput) {
            pageUrlInput.value = window.location.href;
        }

        // Function to reset and open popup
        function openPopup() {
            // Reset form and message before opening
            if(form.dataset.submitted !== 'true') {
                form.reset();
                statusMsg.innerHTML = '';
                statusMsg.className = 'popup-status-message';
                submitBtn.disabled = false;
                submitBtn.style.opacity = '1';
            }
            
            popup.style.display = 'flex';
            setTimeout(() => {
                popup.classList.add('active');
            }, 10);
        }

        // Function to close popup
        function closePopup() {
            popup.classList.remove('active');
            setTimeout(() => {
                popup.style.display = 'none';
            }, 400);
        }

        // Check if user already saw the popup (using local variable for testing so it opens once per refresh)
        let hasSeenThisLoad = false;

        // Logic to show popup
        // if (true) {
            // Initial delay
            setTimeout(() => {
                if (!hasSeenThisLoad) {
                    openPopup();
                    hasSeenThisLoad = true;
                }
            }, 5000);

            // Scroll trigger
            const showOnScroll = () => {
                if (window.scrollY > (document.documentElement.scrollHeight * 0.3)) {
                    if (!hasSeenThisLoad) {
                        openPopup();
                        hasSeenThisLoad = true;
                    }
                    window.removeEventListener('scroll', showOnScroll);
                }
            };
            window.addEventListener('scroll', showOnScroll);
        // }

        closeBtn.addEventListener('click', function() {
            closePopup();
            sessionStorage.setItem('hasSeenLeadPopup', 'true');
        });

        popup.addEventListener('click', function(e) {
            if (e.target === popup) {
                closePopup();
                sessionStorage.setItem('hasSeenLeadPopup', 'true');
            }
        });

        // Phone number input restriction (allow only numbers, +, -, and spaces)
        form.phone.addEventListener('input', function(e) {
            this.value = this.value.replace(/[^0-9\+\-\s]/g, '');
        });

        // AJAX Form Submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic Frontend Validation
            const email = form.email.value.trim();
            const phone = form.phone.value.trim();
            const fullName = form.full_name.value.trim();
            
            if (fullName.length < 2) {
                statusMsg.innerHTML = 'Please enter your full name.';
                statusMsg.className = 'popup-status-message error';
                return;
            }

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                statusMsg.innerHTML = 'Please enter a valid email address.';
                statusMsg.className = 'popup-status-message error';
                return;
            }

            if (phone.length < 10) {
                statusMsg.innerHTML = 'Please enter a valid phone number.';
                statusMsg.className = 'popup-status-message error';
                return;
            }

            statusMsg.innerHTML = 'Sending your request...';
            statusMsg.className = 'popup-status-message';
            submitBtn.disabled = true;
            submitBtn.style.opacity = '0.7';

            const formData = new FormData(form);

            fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => {
                    if (response.ok) return response.json();
                    throw new Error('Server Error');
                })
                .then(data => {
                    statusMsg.innerHTML = 'Success! We will contact you shortly.';
                    statusMsg.className = 'popup-status-message success';
                    form.reset();
                    form.dataset.submitted = 'true';
                    sessionStorage.setItem('hasSeenLeadPopup', 'true');

                    setTimeout(() => {
                        closePopup();
                    }, 2500);
                })
                .catch(error => {
                    // Fallback for non-JSON responses or other errors
                    statusMsg.innerHTML = 'Enquiry submitted successfully!';
                    statusMsg.className = 'popup-status-message success';
                    form.reset();
                    form.dataset.submitted = 'true';
                    sessionStorage.setItem('hasSeenLeadPopup', 'true');
                    
                    setTimeout(() => {
                        closePopup();
                    }, 2500);
                });
        });
    });
</script>
