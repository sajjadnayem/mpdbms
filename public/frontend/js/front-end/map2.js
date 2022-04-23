$(document).ready(function () {

    let currentLink = 0;
    let lastLink = -1;
    const linksProduct = [{
            k: "KE",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: -0.023559,
                longitude: 37.906193,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "NG",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: 9.081999,
                longitude: 8.675277,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "GT",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: 15.783471,
                longitude: -90.230759,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "UG",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: 1.373333,
                longitude: 32.290275,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "PE",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: -9.189967,
                longitude: -75.015152,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "ET",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: 9.145,
                longitude: 40.489673,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "CR",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: 9.748917,
                longitude: -83.753428,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "PA",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: 8.537981,
                longitude: -80.782127,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "NI",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: 12.865416,
                longitude: -85.207229,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "HN",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: 15.199999,
                longitude: -86.241905,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "MM",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: 21.913965,
                longitude: 95.956223,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "NP",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: 28.394857,
                longitude: 84.124008,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "DO",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: 18.735693,
                longitude: -70.162651,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "GH",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: 7.946527,
                longitude: -1.023194,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "PH",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: 12.879721,
                longitude: 121.774017,
            }],
            attrs: {
                "stroke-width": 1
            }
        },
        {
            k: "JO",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: 30.585164,
                longitude: 36.238414,
            }],
            attrs: {
                "stroke-width": 1
            }
        },{
            k: "CM",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: 7.369722,
                longitude: 12.354722,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "ZW",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: -19.015438,
                longitude: 29.154857,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "YE",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: 15.552727,
                longitude: 48.516388,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "LK",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                latitude: 7.873054,
                longitude: 80.771797,
            }],
            attrs: {
                "stroke-width": 1
            }
        }, {
            k: "CA",
            factor: 0.4,
            between: [{
                x: 508.978,
                y: 171.885
            }, {
                x: 190,
                y: 81
            }],
            attrs: {
                "stroke-width": 1
            }
        },
    ];
    let maxLinks = linksProduct.length;

    var updateLinkFunc = function (mapConf, areas) {
        let newOpt = {
            animDuration: 1000,
            'deleteLinkKeys': [],
            'newLinks': {}
        };
        if (lastLink != -1) {
            newOpt['deleteLinkKeys'].push(linksProduct[lastLink].k)
        }
        newOpt['newLinks'][linksProduct[currentLink].k] = linksProduct[currentLink];
        newOpt['newLinks'][linksProduct[currentLink].k].factor = Math.min(Math.random() + 0.15, 0.6) * (Math.random() > 0.5 ? 1 : -1);
        $(".flat-map.mp1").trigger('update', [newOpt]);

        // create popup and showing it around 2000 ms
        if (!onMouseHoverArea) {
            let latlong = linksProduct[currentLink].between[1];
            let pos = mapConf.getCoords(latlong.latitude, latlong.longitude);
            $(".mapTooltip").html(areas[linksProduct[currentLink].k].options.tooltip.content);
            $(".mapTooltip").css({
                'left': pos.x + $(".mapTooltip").width(),
                'top': pos.y + $(".mapTooltip").height() / 3
            });

            $(".mapTooltip").fadeIn(300);
        }


        // update link
        lastLink = currentLink;
        currentLink += 1;
        if (currentLink >= maxLinks) {
            currentLink = 0;
        }

        setTimeout(function () {
            updateLinkFunc(mapConf, areas);
        }, 2000)
    };



    var onMouseHoverArea = false;
    $(".flat-map.mp1").mapael({
        map: {
            name: "world_countries_miller",
            defaultArea: {
                attrs: {
                    fill: "#91BED4",
                    stroke: "#edeff0"
                },
                attrsHover: {
                    fill: "#88DFF9"
                },
                'eventHandlers': {
                    'mouseenter': function (event, id, mapElem, textElem) {
                        onMouseHoverArea = true;
                    },
                    'mouseleave': function (event, id, mapElem, textElem) {
                        onMouseHoverArea = false;
                    },
                }
            },
            defaultPlot: {
                attrs: {
                    fill: "#f95858",
                    stroke: "#ced8d0"
                },
            },

            afterInit: function ($self, paper, areas, plots, options, mapConf) {

                setTimeout(function () {
                    updateLinkFunc(mapConf, areas);
                }, 3000)

            }
        },
        // legend: {
        //     area: {
        //         mode: 'horizontal',
        //         slices: [{
        //             attrs: {
        //                 fill: "#1AA260"
        //             },
        //             label: "Present Operation",
        //             sliceValue: "present"
        //         }, {
        //             attrs: {
        //                 fill: "#FFCE44"
        //             },
        //             label: "Under Registration",
        //             sliceValue: "under_registration"
        //         }, {
        //             attrs: {
        //                 fill: "#DE5246"
        //             },
        //             label: "Pipeline Destinations",
        //             sliceValue: "pipeline"
        //         }]
        //     }
        // },
        // Customize some areas of the map
        areas: {
            "BD": {
                attrs: {
                    fill: "#15a058"
                },
                attrsHover: {
                    fill: "#949494"
                },
                tooltip: {
                    content: "<img src='images/global-reach/bangladesh.png'><span style=\"font-weight:bold;\">Bangladesh</span>"
                }
            },
            // Present Operation
            "KE": {
                value: "present",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#488402"
                },
                tooltip: {
                    content: "<img src='images/global-reach/kenya.png'><span style=\"font-weight:bold;\">Kenya</span>"
                }
            },
            "NG": {
                value: "present",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#488402"
                },
                tooltip: {
                    content: "<img src='images/global-reach/nigeria.png'><span style=\"font-weight:bold;\">Nigeria</span>"
                }
            },
            "GT": {
                value: "present",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#488402"
                },
                tooltip: {
                    content: "<img src='images/global-reach/guatemala.png'><span style=\"font-weight:bold;\">Guatemala</span>"
                }
            },
            "UG": {
                value: "present",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#488402"
                },
                tooltip: {
                    content: "<img src='images/global-reach/uganda.png'><span style=\"font-weight:bold;\">Uganda</span>"
                }
            },
            "PE": {
                value: "present",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#488402"
                },
                tooltip: {
                    content: "<img src='images/global-reach/peru.png'><span style=\"font-weight:bold;\">Peru</span>"
                }
            },

            // Under Registration
            "ET": {
                value: "under_registration",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#FFCE44"
                },
                tooltip: {
                    content: "<img src='images/global-reach/ethiopia.png'><span style=\"font-weight:bold;\">Ethiopia</span>"
                }
            },
            "CR": {
                value: "under_registration",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#FFCE44"
                },
                tooltip: {
                    content: "<img src='images/global-reach/costa-rica.png'><span style=\"font-weight:bold;\">Costa Rica</span>"
                }
            },
            "PA": {
                value: "under_registration",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#FFCE44"
                },
                tooltip: {
                    content: "<img src='images/global-reach/panama.png'><span style=\"font-weight:bold;\">Panama</span>"
                }
            },
            "NI": {
                value: "under_registration",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#FFCE44"
                },
                tooltip: {
                    content: "<img src='images/global-reach/nicaragua.png'><span style=\"font-weight:bold;\">Nicaragua</span>"
                }
            },
            "HN": {
                value: "under_registration",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#FFCE44"
                },
                tooltip: {
                    content: "<img src='images/global-reach/honduras.png'><span style=\"font-weight:bold;\">Honduras</span>"
                }
            },
            "MM": {
                value: "under_registration",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#FFCE44"
                },
                tooltip: {
                    content: "<img src='images/global-reach/myanmar.png'><span style=\"font-weight:bold;\">Myanmar</span>"
                }
            },
            "NP": {
                value: "under_registration",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#FFCE44"
                },
                tooltip: {
                    content: "<img src='images/global-reach/nepal.png'><span style=\"font-weight:bold;\">Nepal</span>"
                }
            },
            "DO": {
                value: "under_registration",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#FFCE44"
                },
                tooltip: {
                    content: "<img src='images/global-reach/dominican-republic.png'><span style=\"font-weight:bold;\">Dominican Republic</span>"
                }
            },
            "GH": {
                value: "under_registration",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#FFCE44"
                },
                tooltip: {
                    content: "<img src='images/global-reach/ghana.png'><span style=\"font-weight:bold;\">Ghana</span>"
                }
            },
            "PH": {
                value: "under_registration",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#FFCE44"
                },
                tooltip: {
                    content: "<img src='images/global-reach/philippines.png'><span style=\"font-weight:bold;\">Philippines</span>"
                }
            },
            "JO": {
                value: "pipeline",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#ff5050"
                },
                tooltip: {
                    content: "<img src='images/global-reach/jordan.png'><span style=\"font-weight:bold;\">Jordan</span>"
                }
            },
            "CM": {
                value: "pipeline",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#ff5050"
                },
                tooltip: {
                    content: "<img src='images/global-reach/cameroon.png'><span style=\"font-weight:bold;\">Cameroon</span>"
                }
            },
            "ZW": {
                value: "pipeline",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#ff5050"
                },
                tooltip: {
                    content: "<img src='images/global-reach/zimbabwe.png'><span style=\"font-weight:bold;\">Zimbabwe</span>"
                }
            },
            "YE": {
                value: "pipeline",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#ff5050"
                },
                tooltip: {
                    content: "<img src='images/global-reach/yemen.png'><span style=\"font-weight:bold;\">Yemen</span>"
                }
            },
            "LK": {
                value: "pipeline",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#ff5050"
                },
                tooltip: {
                    content: "<img src='images/global-reach/sri-lanka.png'><span style=\"font-weight:bold;\">Sri Lanka</span>"
                }
            },

            "CA": {
                value: "pipeline",
                attrs: {
                    fill: "#DE5246"
                },
                attrsHover: {
                    fill: "#ff5050"
                },
                tooltip: {
                    content: "<img src='images/global-reach/canada.png'><span style=\"font-weight:bold;\">Canada</span>"
                }
            },
        },
    });
})