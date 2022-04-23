$(document).ready(function () {
    $(".flat-map.mp1").mapael({
        map: {
            name: "world_countries",
            defaultArea: {
                attrs: {
                    fill: "#edeff0",
                    stroke: "#edeff0"
                },
                attrsHover: {
                    fill: "#edeff0"
                }
            },
            defaultPlot: {
                attrs: {
                    fill: "#f95858",
                    stroke: "#ced8d0"
                },
            }
        },
        plots: {
            'PT_flag': {
                latitude: 39.399872,
                longitude: -8.224454,
                type: "image",
                url: "images/flags/portugal.png",
                width: 28,
                height: 28,
                attrsHover: {
                    transform: "s1.5"
                },
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Portugal</span>"
                },
            },
            'GW_flag': {
                latitude: 11.803749,
                longitude: -15.180413,
                type: "image",
                url: "images/flags/guinea-bissau.png",
                width: 28,
                height: 28,
                attrsHover: {
                    transform: "s1.5"
                },
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Guinea-Bissau</span>"
                },
            },
            'CV_flag': {
                latitude: 16.002082,
                longitude: -24.013197,
                type: "image",
                url: "images/flags/cape-verde.png",
                width: 28,
                height: 28,
                attrsHover: {
                    transform: "s1.5"
                },
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Cape Verde</span>"
                },
            },
            'BR_flag': {
                latitude: -14.235004,
                longitude: -51.92528,
                type: "image",
                url: "images/flags/brazil.png",
                width: 28,
                height: 28,
                attrsHover: {
                    transform: "s1.5"
                },
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Brazil</span>"
                },
            },
            'BD_flag': {
                latitude: 23.777176,
                longitude: 90.399452,
                type: "image",
                url: "images/flags/bangladesh.png",
                width: 28,
                height: 28,
                attrsHover: {
                    transform: "s1.5"
                },
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Bangladesh</span>"
                },
            },
            'GQ_flag': {
                latitude: 1.650801,
                longitude: 10.267895,
                type: "image",
                url: "images/flags/equatorial-guinea.png",
                width: 28,
                height: 28,
                attrsHover: {
                    transform: "s1.5"
                },
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Equatorial Guinea</span>"
                },
            },
            'ST_flag': {
                latitude: 0.18636,
                longitude: 1.613081,
                type: "image",
                url: "images/flags/sao-tome-and-prince.png",
                width: 28,
                height: 28,
                attrsHover: {
                    transform: "s1.5"
                },
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Sao Tome and Principe</span>"
                },
            },
            'AO_flag': {
                latitude: -11.202692,
                longitude: 17.873887,
                type: "image",
                url: "images/flags/angola.png",
                width: 28,
                height: 28,
                attrsHover: {
                    transform: "s1.5"
                },
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Angola</span>"
                },
            },
            'MZ_flag': {
                latitude: -18.665695,
                longitude: 35.529562,
                type: "image",
                url: "images/flags/mozambique.png",
                width: 28,
                height: 28,
                attrsHover: {
                    transform: "s1.5"
                },
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Mozambique</span>"
                },
            },
            'TL_flag': {
                latitude: -8.874217,
                longitude: 125.727539,
                type: "image",
                url: "images/flags/east-timor.png",
                width: 28,
                height: 28,
                attrsHover: {
                    transform: "s1.5"
                },
                tooltip: {
                    content: "<span style=\"font-weight:bold;\">Timor-Leste</span>"
                },
            }
        },
    });
})