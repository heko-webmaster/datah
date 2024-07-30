<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Zopy">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="theme.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div id="profit-lost">
            <a id="brand-logo" href="/inicio.php"><img src="assets/media/logo.png"></a>
            <h1>PROFIT & LOST</h1>
            <div class="container">
                <div id="operativa" class="dashboard-card">
                    <h2>Utilidad Operativa</h2>
                    <svg viewBox="0 0 288.27 193.15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m213.11,113.03c3.29,7.28,5.42,15.06,6.28,23.06.8,7.41.49,14.88-.89,22.16-1.49,7.88,1.99,16.33,9.44,19.3l36.61,14.58c7.45,2.96,15.98-.66,18.18-8.37,5.09-17.81,6.71-36.48,4.72-54.99-1.75-16.29-6.27-32.1-13.29-46.78-.74.58-1.55,1.1-2.42,1.54l-58.63,29.5Z" fill="#3bc101" stroke-width="0"/>
                        <path d="m263.66,63.59c-8.43-12.51-18.74-23.56-30.53-32.81-.41-.32-.83-.65-1.25-.97-1.36.92-2.6,2.09-3.62,3.5h0l-37.17,51.49c.48.38.94.76,1.41,1.15,5.51,4.58,10.37,9.93,14.4,15.91,2.39,3.55,4.46,7.29,6.21,11.16l58.63-29.5c.87-.44,1.68-.96,2.42-1.54-3.04-6.36-6.54-12.51-10.5-18.39Z" fill="#e8e84b" stroke-width="0"/>
                        <path d="m231.88,29.81c-6.19-4.75-12.77-9.02-19.69-12.73C191.5,6,168.42.13,144.95,0c-23.46-.13-46.61,5.47-67.41,16.31-20.81,10.85-38.66,26.61-52,45.92C14.04,78.88,6.21,97.73,2.49,117.53c-.6,3.17-1.1,6.37-1.48,9.59-1.74,14.6-1.22,29.32,1.48,43.67.72,3.82,1.58,7.61,2.61,11.37,2.11,7.74,10.59,11.45,18.08,8.57h.01l36.77-14.16c7.48-2.88,11.06-11.29,9.66-19.19-1.3-7.29-1.52-14.76-.64-22.17,1.46-12.23,5.88-23.93,12.88-34.07,7-10.14,16.37-18.42,27.3-24.11s23.09-8.63,35.41-8.56,24.44,3.15,35.3,8.97c3.97,2.12,7.71,4.59,11.22,7.36.48.38.94.76,1.41,1.15l38.26-50.42c1.12-1.47,1.89-3.09,2.37-4.75-.41-.32-.83-.65-1.25-.97Z" fill="url(#paint0_linear_498_1159)" stroke-width="0"/>
                        <defs>
                            <linearGradient id="paint0_linear_498_1159" x1="364.347" y1="130.909" x2="-48.8075" y2="355.096" gradientUnits="userSpaceOnUse">
                                <stop offset=".07" stop-color="#c10230"/>
                                <stop offset=".9" stop-color="#c10230"/>
                            </linearGradient>
                        </defs>
                    </svg><svg class="needle" viewBox="0 0 30 144" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="15.2089" cy="128.608" r="10.9086" fill="white" stroke="#000" stroke-width="7" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.3486 0.920656L25.3277 127.679L25.3166 127.679C25.322 127.833 25.3239 127.988 25.322 128.144C25.2587 133.535 20.8377 137.853 15.4474 137.79C10.0571 137.726 5.73875 133.305 5.80203 127.915C5.80386 127.759 5.80934 127.604 5.81838 127.45L5.80766 127.45L17.3486 0.920656ZM19.2238 134.487C22.4036 132.316 23.2212 127.978 21.0498 124.798C18.8784 121.618 14.5404 120.801 11.3606 122.972C8.18076 125.144 7.36323 129.482 9.53459 132.661C11.706 135.841 16.044 136.659 19.2238 134.487Z" fill="url(#paint0_linear_498_1180)" />
                        <defs>
                            <linearGradient id="paint0_linear_498_1180" x1="8.57715" y1="129.079" x2="18.8019" y2="129.199" gradientUnits="userSpaceOnUse">
                                <stop offset="0.6874" stop-color="#3F4142" />
                                <stop offset="0.6875" stop-color="#2C2C2C" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <p class="value"></p>
                    <p class="percentage"></p>
                </div><div id="viaje" class="dashboard-card">
                    <h2>Utilidad de Viaje</h2>
                    <svg viewBox="0 0 288.27 193.15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m213.11,113.03c3.29,7.28,5.42,15.06,6.28,23.06.8,7.41.49,14.88-.89,22.16-1.49,7.88,1.99,16.33,9.44,19.3l36.61,14.58c7.45,2.96,15.98-.66,18.18-8.37,5.09-17.81,6.71-36.48,4.72-54.99-1.75-16.29-6.27-32.1-13.29-46.78-.74.58-1.55,1.1-2.42,1.54l-58.63,29.5Z" fill="#3bc101" stroke-width="0"/>
                        <path d="m263.66,63.59c-8.43-12.51-18.74-23.56-30.53-32.81-.41-.32-.83-.65-1.25-.97-1.36.92-2.6,2.09-3.62,3.5h0l-37.17,51.49c.48.38.94.76,1.41,1.15,5.51,4.58,10.37,9.93,14.4,15.91,2.39,3.55,4.46,7.29,6.21,11.16l58.63-29.5c.87-.44,1.68-.96,2.42-1.54-3.04-6.36-6.54-12.51-10.5-18.39Z" fill="#e8e84b" stroke-width="0"/>
                        <path d="m231.88,29.81c-6.19-4.75-12.77-9.02-19.69-12.73C191.5,6,168.42.13,144.95,0c-23.46-.13-46.61,5.47-67.41,16.31-20.81,10.85-38.66,26.61-52,45.92C14.04,78.88,6.21,97.73,2.49,117.53c-.6,3.17-1.1,6.37-1.48,9.59-1.74,14.6-1.22,29.32,1.48,43.67.72,3.82,1.58,7.61,2.61,11.37,2.11,7.74,10.59,11.45,18.08,8.57h.01l36.77-14.16c7.48-2.88,11.06-11.29,9.66-19.19-1.3-7.29-1.52-14.76-.64-22.17,1.46-12.23,5.88-23.93,12.88-34.07,7-10.14,16.37-18.42,27.3-24.11s23.09-8.63,35.41-8.56,24.44,3.15,35.3,8.97c3.97,2.12,7.71,4.59,11.22,7.36.48.38.94.76,1.41,1.15l38.26-50.42c1.12-1.47,1.89-3.09,2.37-4.75-.41-.32-.83-.65-1.25-.97Z" fill="url(#paint0_linear_498_1159)" stroke-width="0"/>
                    </svg><svg class="needle" viewBox="0 0 30 144" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="15.2089" cy="128.608" r="10.9086" fill="white" stroke="#000" stroke-width="7" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.3486 0.920656L25.3277 127.679L25.3166 127.679C25.322 127.833 25.3239 127.988 25.322 128.144C25.2587 133.535 20.8377 137.853 15.4474 137.79C10.0571 137.726 5.73875 133.305 5.80203 127.915C5.80386 127.759 5.80934 127.604 5.81838 127.45L5.80766 127.45L17.3486 0.920656ZM19.2238 134.487C22.4036 132.316 23.2212 127.978 21.0498 124.798C18.8784 121.618 14.5404 120.801 11.3606 122.972C8.18076 125.144 7.36323 129.482 9.53459 132.661C11.706 135.841 16.044 136.659 19.2238 134.487Z" fill="url(#paint0_linear_498_1180)" />
                    </svg>
                    <p class="value"></p>
                    <p class="percentage"></p>
                </div><div id="ebitda" class="dashboard-card">
                    <h2>EBITDA</h2>
                    <svg viewBox="0 0 288.27 193.15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="m213.11,113.03c3.29,7.28,5.42,15.06,6.28,23.06.8,7.41.49,14.88-.89,22.16-1.49,7.88,1.99,16.33,9.44,19.3l36.61,14.58c7.45,2.96,15.98-.66,18.18-8.37,5.09-17.81,6.71-36.48,4.72-54.99-1.75-16.29-6.27-32.1-13.29-46.78-.74.58-1.55,1.1-2.42,1.54l-58.63,29.5Z" fill="#3bc101" stroke-width="0"/>
                        <path d="m263.66,63.59c-8.43-12.51-18.74-23.56-30.53-32.81-.41-.32-.83-.65-1.25-.97-1.36.92-2.6,2.09-3.62,3.5h0l-37.17,51.49c.48.38.94.76,1.41,1.15,5.51,4.58,10.37,9.93,14.4,15.91,2.39,3.55,4.46,7.29,6.21,11.16l58.63-29.5c.87-.44,1.68-.96,2.42-1.54-3.04-6.36-6.54-12.51-10.5-18.39Z" fill="#e8e84b" stroke-width="0"/>
                        <path d="m231.88,29.81c-6.19-4.75-12.77-9.02-19.69-12.73C191.5,6,168.42.13,144.95,0c-23.46-.13-46.61,5.47-67.41,16.31-20.81,10.85-38.66,26.61-52,45.92C14.04,78.88,6.21,97.73,2.49,117.53c-.6,3.17-1.1,6.37-1.48,9.59-1.74,14.6-1.22,29.32,1.48,43.67.72,3.82,1.58,7.61,2.61,11.37,2.11,7.74,10.59,11.45,18.08,8.57h.01l36.77-14.16c7.48-2.88,11.06-11.29,9.66-19.19-1.3-7.29-1.52-14.76-.64-22.17,1.46-12.23,5.88-23.93,12.88-34.07,7-10.14,16.37-18.42,27.3-24.11s23.09-8.63,35.41-8.56,24.44,3.15,35.3,8.97c3.97,2.12,7.71,4.59,11.22,7.36.48.38.94.76,1.41,1.15l38.26-50.42c1.12-1.47,1.89-3.09,2.37-4.75-.41-.32-.83-.65-1.25-.97Z" fill="url(#paint0_linear_498_1159)" stroke-width="0"/>
                    </svg><svg class="needle" viewBox="0 0 30 144" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="15.2089" cy="128.608" r="10.9086" fill="white" stroke="#000" stroke-width="7" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.3486 0.920656L25.3277 127.679L25.3166 127.679C25.322 127.833 25.3239 127.988 25.322 128.144C25.2587 133.535 20.8377 137.853 15.4474 137.79C10.0571 137.726 5.73875 133.305 5.80203 127.915C5.80386 127.759 5.80934 127.604 5.81838 127.45L5.80766 127.45L17.3486 0.920656ZM19.2238 134.487C22.4036 132.316 23.2212 127.978 21.0498 124.798C18.8784 121.618 14.5404 120.801 11.3606 122.972C8.18076 125.144 7.36323 129.482 9.53459 132.661C11.706 135.841 16.044 136.659 19.2238 134.487Z" fill="url(#paint0_linear_498_1180)" />
                    </svg>
                    <p class="value"></p>
                    <p class="percentage"></p>
                </div>
                <div id="base1" class="base">
                    <img src="assets/media/1Tarjeta-lazaro.png">
                    <div>
                        <img src="assets/media/1Edo-lazaro.png">
                        <p class="value"></p>
                        <p class="percentage"></p>
                    </div>
                    <p>Base 1</p>
                </div><div id="base2" class="base">
                    <img src="assets/media/2Tarjeta-Manzanillo.png">
                    <div>
                        <img src="assets/media/2Edo- Manzanillo.png">
                        <p class="value"></p>
                        <p class="percentage"></p>
                    </div>
                    <p>Base 2</p>
                </div><div id="base3" class="base">
                    <img src="assets/media/3Tarjeta-Nuevo laredo.png">
                    <div>
                        <img src="assets/media/3Edo-laredo.png">
                        <p class="value"></p>
                        <p class="percentage"></p>
                    </div>
                    <p>Base 3</p>
                </div><div id="base4" class="base">
                    <img src="assets/media/4Tarjeta-Salamanca.png">
                    <div>
                        <img src="assets/media/4Edo-Salamanca.png">
                        <p class="value"></p>
                        <p class="percentage"></p>
                    </div>
                    <p>Base 4</p>
                </div><div id="base5" class="base">
                    <img src="assets/media/5Tarjeta-Tepotzotlan.png">
                    <div>
                        <img src="assets/media/5Edo-Tepotzotlan.png">
                        <p class="value"></p>
                        <p class="percentage"></p>
                    </div>
                    <p>Base 5</p>
                </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            let vh = window.innerHeight * 0.01
            document.documentElement.style.setProperty('--vh', `${vh}px`)

            windowW = jQuery(window).width()
            windowH = jQuery(window).height()
            if (windowW > 767) {
                fontSize = 16
                ratio = windowW/1920
            } else {
                fontSize = 24
                ratio = windowW/767
            }
            responsiveFontSize = fontSize*ratio
            jQuery("html").css('font-size', responsiveFontSize)

            var readyInterval = setInterval(function(e) {
                function getSpeedometerValue(val, min, max) {
                    const meterMin = -110;
                    const meterMax = 110;
                    const meterValue = meterMin + ((val - min) * (meterMax - meterMin)) / (max - min);
                    return meterValue;
                }
                if (document.readyState === "complete") {
                    clearInterval(readyInterval)

                    let operativaDict = {
                        'value': 63.12,
                        'value_str': "$ 63.12",
                        'min': 0,
                        'max': 100,
                        'percentage': "70 %",
                        'metric': "M"
                    }
                    jQuery("#operativa .needle").css('transform', 'translateY(100%) rotate(' + getSpeedometerValue(operativaDict.value, operativaDict.min, operativaDict.max) + 'deg)')
                    jQuery("#operativa .value").html(operativaDict.value_str + "<sup>" + operativaDict.metric + " </sup>")
                    jQuery("#operativa .percentage").text(operativaDict.percentage)
                    setTimeout(function(e) {
                        jQuery("#operativa .needle").css('transition', "0.3s")
                    }, 5000)

                    let viajeDict = {
                        'value': 10.94,
                        'value_str': "$ 10.94",
                        'min': 0,
                        'max': 15,
                        'percentage': "88 %",
                        'metric': "M"
                    }
                    jQuery("#viaje .needle").css('transform', 'translateY(100%) rotate(' + getSpeedometerValue(viajeDict.value, viajeDict.min, viajeDict.max) + 'deg)')
                    jQuery("#viaje .value").html(viajeDict.value_str + "<sup>" + viajeDict.metric + " </sup>")
                    jQuery("#viaje .percentage").text(viajeDict.percentage)
                    setTimeout(function(e) {
                        jQuery("#viaje .needle").css('transition', "0.3s")
                    }, 5000)

                    let ebitdaDict = {
                        'value': 3.52,
                        'value_str': "$ 3.52",
                        'min': 0,
                        'max': 4,
                        'percentage': "91 %",
                        'metric': "M"
                    }
                    jQuery("#ebitda .needle").css('transform', 'translateY(100%) rotate(' + getSpeedometerValue(ebitdaDict.value, ebitdaDict.min, ebitdaDict.max) + 'deg)')
                    jQuery("#ebitda .value").html(ebitdaDict.value_str + "<sup>" + ebitdaDict.metric + " </sup>")
                    jQuery("#ebitda .percentage").text(ebitdaDict.percentage)
                    setTimeout(function(e) {
                        jQuery("#ebitda .needle").css('transition', "0.3s")
                    }, 5000)

                    let base1Dict = {
                        'value_str': "$ 3.52",
                        'percentage': "35 %",
                        'metric': "M"
                    }
                    jQuery("#base1 .value").html(base1Dict.value_str + "<sup>" + base1Dict.metric + " </sup>")
                    jQuery("#base1 .percentage").text(base1Dict.percentage)

                    let base2Dict = {
                        'value_str': "$ 22.8",
                        'percentage': "77 %",
                        'metric': "M"
                    }
                    jQuery("#base2 .value").html(base2Dict.value_str + "<sup>" + base2Dict.metric + " </sup>")
                    jQuery("#base2 .percentage").text(base2Dict.percentage)

                    let base3Dict = {
                        'value_str': "$ 28.3",
                        'percentage': "80 %",
                        'metric': "M"
                    }
                    jQuery("#base3 .value").html(base3Dict.value_str + "<sup>" + base3Dict.metric + " </sup>")
                    jQuery("#base3 .percentage").text(base3Dict.percentage)

                    let base4Dict = {
                        'value_str': "$ 2.9",
                        'percentage': "45 %",
                        'metric': "M"
                    }
                    jQuery("#base4 .value").html(base4Dict.value_str + "<sup>" + base4Dict.metric + " </sup>")
                    jQuery("#base4 .percentage").text(base4Dict.percentage)

                    let base5Dict = {
                        'value_str': "$ 5.9",
                        'percentage': "60 %",
                        'metric': "M"
                    }
                    jQuery("#base5 .value").html(base5Dict.value_str + "<sup>" + base5Dict.metric + " </sup>")
                    jQuery("#base5 .percentage").text(base5Dict.percentage)
                }   
            }, 500)
        })
        jQuery(window).on('resize', function() {
            let vh = window.innerHeight * 0.01
            document.documentElement.style.setProperty('--vh', `${vh}px`)

            windowW = jQuery(window).width()
            windowH = jQuery(window).height()
            if (windowW > 767) {
                fontSize = 16
                ratio = windowW/1920
            } else {
                fontSize = 24
                ratio = windowW/767
            }
            responsiveFontSize = fontSize*ratio
            jQuery("html").css('font-size', responsiveFontSize)
        })
    </script>
</html>

