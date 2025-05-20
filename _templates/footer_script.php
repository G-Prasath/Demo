<script type='text/javascript' src='js/jquery/jquery.js'></script>
            <script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
            <script type='text/javascript' src='plugins/goodlayers-core/plugins/combine/script.js'></script>
            <script type='text/javascript'>
                /* <![CDATA[ */
                var gdlr_core_pbf = {
                    "admin": "",
                    "video": {
                        "width": "640",
                        "height": "360"
                    },
                    "ajax_url": "#"
                };
                /* ]]> */
            </script>
            <script type='text/javascript' src='plugins/goodlayers-core/include/js/page-builder.js'></script>
            <script type='text/javascript' src='js/jquery/ui/effect.min.js'></script>
            <script type='text/javascript' src='js/plugins.js'></script>
            <script type='text/javascript' src='js/isotope.js'></script>
            <script>
                function validateForm() {
                    // Clear previous error messages
                    document.getElementById('nameError').textContent = '';
                    document.getElementById('emailError').textContent = '';
                    document.getElementById('phoneError').textContent = '';

                    let isValid = true;

                    // Validate name
                    const name = document.getElementById('name').value;
                    if (name === '') {
                        document.getElementById('nameError').textContent = 'Name is required';
                        isValid = false;
                    }

                    // Validate email
                    const email = document.getElementById('email').value;
                    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (email === '') {
                        document.getElementById('emailError').textContent = 'Email is required';
                        isValid = false;
                    } else if (!emailPattern.test(email)) {
                        document.getElementById('emailError').textContent = 'Invalid email format';
                        isValid = false;
                    }

                    // Validate phone number
                    const phone = document.getElementById('phone').value;
                    const phonePattern = /^(\+91 \d{10}|\d{10})$/; // Assumes phone number is 10 digits
                    if (phone === '') {
                        document.getElementById('phoneError').textContent = 'Phone number is required';
                        isValid = false;
                    } else if (!phonePattern.test(phone)) {
                        document.getElementById('phoneError').textContent = 'Invalid phone number format [EX:+91 1234567890 (or) 1234567890]';
                        isValid = false;
                    }

                    return isValid;
                }
            </script>

            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCLK7SVJ" height="0" width="0"
                    style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
