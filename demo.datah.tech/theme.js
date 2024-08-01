var windowW, windowH
var fontSize, ratio, responsiveFontSize

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
    
    if (jQuery("#balanced-scorecard").length > 0) {
        let readyInterval = setInterval(function(e) {
            function getSpeedometerValue(val, min, max) {
                const meterMin = -110;
                const meterMax = 110;
                const meterValue = meterMin + ((val - min) * (meterMax - meterMin)) / (max - min);
                return meterValue;
            }
            if (document.readyState === "complete") {
                clearInterval(readyInterval)
                let ingresosDict = {
                    'value': 13.15,
                    'value_str': "$ 13.15",
                    'min': 0,
                    'max': 30,
                    'metric': "M"
                }
                jQuery("#ingresos .needle").css('transform', 'rotate(' + getSpeedometerValue(ingresosDict.value, ingresosDict.min, ingresosDict.max) + 'deg)')
                jQuery("#ingresos .value").text(ingresosDict.value_str)
                jQuery("#ingresos .metric").text(ingresosDict.metric)

                let combustibleDict = {
                    'value': 0.45,
                    'value_str': "0.45",
                    'min': 0,
                    'max': 0.7,
                    'metric': "Km/l"
                }
                jQuery("#combustible .needle").css('transform', 'rotate(' + getSpeedometerValue(combustibleDict.value, combustibleDict.min, combustibleDict.max) + 'deg)')
                jQuery("#combustible .value").text(combustibleDict.value_str)
                jQuery("#combustible .metric").text(combustibleDict.metric)

                let mantenimientoDict = {
                    'value': 0,
                    'value_str': "0",
                    'min': 0,
                    'max': 0,
                    'metric': "M"
                }
                jQuery("#mantenimiento .needle").css('transform', 'rotate(' + getSpeedometerValue(mantenimientoDict.value, mantenimientoDict.min, mantenimientoDict.max) + 'deg)')
                jQuery("#mantenimiento .value").text(mantenimientoDict.value_str)
                jQuery("#mantenimiento .metric").text(mantenimientoDict.metric)

                let servicioDict = {
                    'value': 0,
                    'value_str': "0",
                    'min': 0,
                    'max': 0,
                    'metric': "M"
                }
                jQuery("#servicio .needle").css('transform', 'rotate(' + getSpeedometerValue(servicioDict.value, servicioDict.min, servicioDict.max) + 'deg)')
                jQuery("#servicio .value").text(servicioDict.value_str)
                jQuery("#servicio .metric").text(servicioDict.metric)

                let siniestralidadDict = {
                    'value': 0,
                    'value_str': "0",
                    'min': 0,
                    'max': 0,
                    'metric': "M"
                }
                jQuery("#siniestralidad .needle").css('transform', 'rotate(' + getSpeedometerValue(siniestralidadDict.value, siniestralidadDict.min, siniestralidadDict.max) + 'deg)')
                jQuery("#siniestralidad .value").text(siniestralidadDict.value_str)
                jQuery("#siniestralidad .metric").text(siniestralidadDict.metric)

                let humanoDict = {
                    'value': 189,
                    'value_str': "189",
                    'min': 0,
                    'max': 300,
                    'metric': "M"
                }
                jQuery("#humano .needle").css('transform', 'rotate(' + getSpeedometerValue(humanoDict.value, humanoDict.min, humanoDict.max) + 'deg)')
                jQuery("#humano .value").text(humanoDict.value_str)
                jQuery("#humano .metric").text(humanoDict.metric)

                let cobranzaDict = {
                    'value': 0,
                    'value_str': "0",
                    'min': 0,
                    'max': 0,
                    'metric': "M"
                }
                jQuery("#cobranza .needle").css('transform', 'rotate(' + getSpeedometerValue(cobranzaDict.value, cobranzaDict.min, cobranzaDict.max) + 'deg)')
                jQuery("#cobranza .value").text(cobranzaDict.value_str)
                jQuery("#cobranza .metric").text(cobranzaDict.metric)

                let utilidadDict = {
                    'value': 10.94,
                    'value_str': "$ 10.94",
                    'min': 0,
                    'max': 15,
                    'metric': "M"
                }
                jQuery("#utilidad .needle").css('transform', 'rotate(' + getSpeedometerValue(utilidadDict.value, utilidadDict.min, utilidadDict.max) + 'deg)')
                jQuery("#utilidad .value").text(utilidadDict.value_str)
                jQuery("#utilidad .metric").text(utilidadDict.metric)
            }   
        }, 500)
    }

    if (jQuery("#profit-lost").length > 0) {
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
    }
})

jQuery(window).on('resize', function (e) {
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

jQuery(document).mousemove(function(e){
    if (jQuery("#balanced-scorecard").length > 0) {
        let tan = Math.atan2(e.pageY - jQuery(window).height(), e.pageX - jQuery(window).width()); // GET TAN FROM MOUSE POSITION
        let angle = (tan > 0 ? tan : (2*Math.PI + tan)) * 360 / (2*Math.PI); // MAP ATAN2 TO DEGREES 0-45
        
        jQuery("#circle1").css({"-webkit-transform":  "rotate(" + angle + "deg)"});
        jQuery("#circle1").css({"-ms-transform":  "rotate(" + angle + "deg)"});
        jQuery("#circle1").css({"transform":  "rotate(" + angle + "deg)"});

        jQuery("#circle2").css({"-webkit-transform":  "rotate(" + (angle*2)/3 + "deg)"});
        jQuery("#circle2").css({"-ms-transform":  "rotate(" + (angle*2)/3 + "deg)"});
        jQuery("#circle2").css({"transform":  "rotate(" + (angle*2)/3 + "deg)"});

        jQuery("#circle3").css({"-webkit-transform":  "rotate(" + angle/3 + "deg)"});
        jQuery("#circle3").css({"-ms-transform":  "rotate(" + angle/3 + "deg)"});
        jQuery("#circle3").css({"transform":  "rotate(" + angle/3 + "deg)"});
    }
});