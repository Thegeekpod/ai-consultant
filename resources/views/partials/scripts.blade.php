<!-- All JS Files -->
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/counter.js') }}"></script>
<script src="{{ asset('assets/js/gsap.min.js') }}"></script>

<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrambleTextPlugin.min.js') }}"></script>
<script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
<script src="{{ asset('assets/js/vanilla-tilt.min.js') }}"></script>
<script src="{{ asset('assets/js/actova-cursor.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}?v={{ time() }}"></script>

<script>
        function openConsultantPopup(name) {
            const popup = document.getElementById('leadPopup');
            const form = document.getElementById('leadPopupForm');
            const msgInput = document.querySelector('input[name="message"]');
            
            if (popup) {
                if (msgInput) {
                    msgInput.value = "Consultation request for expert: " + name;
                }
                
                const title = popup.querySelector('.title');
                if (title) {
                    title.innerHTML = "Contact " + name;
                }
                
                if(form && form.dataset.submitted === 'true') {
                    form.reset();
                    if (msgInput) msgInput.value = "Consultation request for expert: " + name;
                    form.dataset.submitted = 'false';
                    const statusMsg = document.getElementById('popupFormMessage');
                    if (statusMsg) {
                        statusMsg.innerHTML = '';
                        statusMsg.className = 'popup-status-message';
                    }
                    const submitBtn = document.getElementById('popupSubmitBtn');
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.style.opacity = '1';
                    }
                }
                
                popup.style.display = 'flex';
                setTimeout(() => {
                    popup.classList.add('active');
                }, 10);
            }
        }
      </script>

@stack('scripts')
