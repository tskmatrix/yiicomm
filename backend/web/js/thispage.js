
    $(function () {

        /* Bar Chart starts */

        var d1 = [];
        for (var i = 0; i <= 30; i += 1)
            d1.push([i, parseInt(Math.random() * 30)]);

        var d2 = [];
        for (var i = 0; i <= 30; i += 1)
            d2.push([i, parseInt(Math.random() * 30)]);


        var stack = 0, bars = true, lines = false, steps = false;

        function plotWithOptions() {
            $.plot($("#bar-chart"), [ d1, d2 ], {
                series: {
                    stack: stack,
                    lines: { show: lines, fill: true, steps: steps },
                    bars: { show: bars, barWidth: 0.8 }
                },
                grid: {
                    borderWidth: 0, hoverable: true, color: "#777"
                },
                colors: ["#52b9e9", "#0aa4eb"],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: { colors: [
                        { opacity: 0.9 },
                        { opacity: 0.8 }
                    ] }
                }
            });
        }

        plotWithOptions();

        $(".stackControls input").click(function (e) {
            e.preventDefault();
            stack = $(this).val() == "With stacking" ? true : null;
            plotWithOptions();
        });
        $(".graphControls input").click(function (e) {
            e.preventDefault();
            bars = $(this).val().indexOf("Bars") != -1;
            lines = $(this).val().indexOf("Lines") != -1;
            steps = $(this).val().indexOf("steps") != -1;
            plotWithOptions();
        });

        /* Bar chart ends */

    });


    /* Curve chart starts */

    $(function () {
        var sin = [], cos = [];
        for (var i = 0; i < 14; i += 0.5) {
            sin.push([i, Math.sin(i)]);
            cos.push([i, Math.cos(i)]);
        }

        var plot = $.plot($("#curve-chart"),
                [
                    { data: sin, label: "sin(x)"},
                    { data: cos, label: "cos(x)" }
                ], {
                    series: {
                        lines: { show: true,
                            fill: true,
                            fillColor: {
                                colors: [
                                    {
                                        opacity: 0.05
                                    },
                                    {
                                        opacity: 0.01
                                    }
                                ]
                            }
                        },
                        points: { show: true }
                    },
                    grid: { hoverable: true, clickable: true, borderWidth: 0 },
                    yaxis: { min: -1.2, max: 1.2 },
                    colors: ["#fa3031", "#43c83c"]
                });


        function showTooltip(x, y, contents) {
            $('<div id="tooltip">' + contents + '</div>').css({
                position: 'absolute',
                display: 'none',
                top: y + 5,
                width: 100,
                left: x + 5,
                border: '1px solid #000',
                padding: '2px 8px',
                color: '#ccc',
                'background-color': '#000',
                opacity: 0.9
            }).appendTo("body").fadeIn(200);
        }

        var previousPoint = null;
        $("#curve-chart").bind("plothover", function (event, pos, item) {
            $("#x").text(pos.x.toFixed(2));
            $("#y").text(pos.y.toFixed(2));

            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                    showTooltip(item.pageX, item.pageY, item.series.label + " of " + x + " = " + y);
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        });

        $("#curve-chart").bind("plotclick", function (event, pos, item) {
            if (item) {
                $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
                plot.highlight(item.series, item.datapoint);
            }
        });

    });

    /* Curve chart ends */