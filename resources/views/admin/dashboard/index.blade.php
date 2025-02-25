@extends('dashboard_layout.layout')


@section('logout')
    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit" class="btn">
            <a class="dropdown-item">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Log Out</span>
            </a>
    </form>
@endsection





@section('content')
    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                            <p class="mb-4">
                                You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                                your profile.
                            </p>

                            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Profit</span>
                            <h3 class="card-title mb-2">$12,628</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span>Sales</span>
                            <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Revenue -->
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                        <div id="totalRevenueChart" class="px-2" style="min-height: 315px;">
                            <div id="apexchartsdcvm6dk8" class="apexcharts-canvas apexchartsdcvm6dk8 apexcharts-theme-light"
                                style="width: 476px; height: 300px;"><svg id="SvgjsSvg2205" width="476" height="300"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <foreignObject x="0" y="0" width="476" height="300">
                                        <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top"
                                            xmlns="http://www.w3.org/1999/xhtml"
                                            style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="2021"
                                                data:collapsed="false" style="margin: 2px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                                                    style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="1" i="0" data:default-text="2021"
                                                    data:collapsed="false"
                                                    style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2021</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="2020"
                                                data:collapsed="false" style="margin: 2px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="2" data:collapsed="false"
                                                    style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="2" i="1" data:default-text="2020"
                                                    data:collapsed="false"
                                                    style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2020</span>
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG2207" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(53.796875, 51)">
                                        <defs id="SvgjsDefs2206">
                                            <linearGradient id="SvgjsLinearGradient2211" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop2212" stop-opacity="0.4"
                                                    stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop2213" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop2214" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMaskdcvm6dk8">
                                                <rect id="SvgjsRect2216" width="412.203125" height="223.73" x="-5" y="-3"
                                                    rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskdcvm6dk8"></clipPath>
                                            <clipPath id="nonForecastMaskdcvm6dk8"></clipPath>
                                            <clipPath id="gridRectMarkerMaskdcvm6dk8">
                                                <rect id="SvgjsRect2217" width="406.203125" height="221.73" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect2215" width="20.11015625" height="217.73" x="0" y="0" rx="0"
                                            ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                            fill="url(#SvgjsLinearGradient2211)" class="apexcharts-xcrosshairs" y2="217.73"
                                            filter="none" fill-opacity="0.9"></rect>
                                        <g id="SvgjsG2237" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG2238" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText2240"
                                                    font-family="Helvetica, Arial, sans-serif" x="28.728794642857142"
                                                    y="246.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2241">Jan</tspan>
                                                    <title>Jan</title>
                                                </text><text id="SvgjsText2243" font-family="Helvetica, Arial, sans-serif"
                                                    x="86.18638392857143" y="246.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2244">Feb</tspan>
                                                    <title>Feb</title>
                                                </text><text id="SvgjsText2246" font-family="Helvetica, Arial, sans-serif"
                                                    x="143.64397321428572" y="246.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2247">Mar</tspan>
                                                    <title>Mar</title>
                                                </text><text id="SvgjsText2249" font-family="Helvetica, Arial, sans-serif"
                                                    x="201.1015625" y="246.73" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2250">Apr</tspan>
                                                    <title>Apr</title>
                                                </text><text id="SvgjsText2252" font-family="Helvetica, Arial, sans-serif"
                                                    x="258.5591517857143" y="246.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2253">May</tspan>
                                                    <title>May</title>
                                                </text><text id="SvgjsText2255" font-family="Helvetica, Arial, sans-serif"
                                                    x="316.01674107142856" y="246.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2256">Jun</tspan>
                                                    <title>Jun</title>
                                                </text><text id="SvgjsText2258" font-family="Helvetica, Arial, sans-serif"
                                                    x="373.47433035714283" y="246.73" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan2259">Jul</tspan>
                                                    <title>Jul</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG2274" class="apexcharts-grid">
                                            <g id="SvgjsG2275" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine2277" x1="0" y1="0" x2="402.203125" y2="0"
                                                    stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2278" x1="0" y1="43.546" x2="402.203125" y2="43.546"
                                                    stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2279" x1="0" y1="87.092" x2="402.203125" y2="87.092"
                                                    stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2280" x1="0" y1="130.638" x2="402.203125" y2="130.638"
                                                    stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2281" x1="0" y1="174.184" x2="402.203125" y2="174.184"
                                                    stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2282" x1="0" y1="217.73" x2="402.203125" y2="217.73"
                                                    stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG2276" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine2284" x1="0" y1="217.73" x2="402.203125" y2="217.73"
                                                stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2283" x1="0" y1="1" x2="0" y2="217.73" stroke="transparent"
                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG2218" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG2219" class="apexcharts-series" seriesName="2021" rel="1"
                                                data:realIndex="0">
                                                <path id="SvgjsPath2221"
                                                    d="M 18.673716517857144 120.638L 18.673716517857144 62.255200000000016Q 18.673716517857144 52.255200000000016 28.673716517857144 52.255200000000016L 22.783872767857147 52.255200000000016Q 32.78387276785715 52.255200000000016 32.78387276785715 62.255200000000016L 32.78387276785715 62.255200000000016L 32.78387276785715 120.638Q 32.78387276785715 130.638 22.783872767857147 130.638L 28.673716517857144 130.638Q 18.673716517857144 130.638 18.673716517857144 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskdcvm6dk8)"
                                                    pathTo="M 18.673716517857144 120.638L 18.673716517857144 62.255200000000016Q 18.673716517857144 52.255200000000016 28.673716517857144 52.255200000000016L 22.783872767857147 52.255200000000016Q 32.78387276785715 52.255200000000016 32.78387276785715 62.255200000000016L 32.78387276785715 62.255200000000016L 32.78387276785715 120.638Q 32.78387276785715 130.638 22.783872767857147 130.638L 28.673716517857144 130.638Q 18.673716517857144 130.638 18.673716517857144 120.638z"
                                                    pathFrom="M 18.673716517857144 120.638L 18.673716517857144 120.638L 32.78387276785715 120.638L 32.78387276785715 120.638L 32.78387276785715 120.638L 32.78387276785715 120.638L 32.78387276785715 120.638L 18.673716517857144 120.638"
                                                    cy="52.255200000000016" cx="73.13130580357142" j="0" val="18"
                                                    barHeight="78.38279999999999" barWidth="20.11015625"></path>
                                                <path id="SvgjsPath2222"
                                                    d="M 76.13130580357142 120.638L 76.13130580357142 110.15580000000001Q 76.13130580357142 100.15580000000001 86.13130580357142 100.15580000000001L 80.24146205357142 100.15580000000001Q 90.24146205357142 100.15580000000001 90.24146205357142 110.15580000000001L 90.24146205357142 110.15580000000001L 90.24146205357142 120.638Q 90.24146205357142 130.638 80.24146205357142 130.638L 86.13130580357142 130.638Q 76.13130580357142 130.638 76.13130580357142 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskdcvm6dk8)"
                                                    pathTo="M 76.13130580357142 120.638L 76.13130580357142 110.15580000000001Q 76.13130580357142 100.15580000000001 86.13130580357142 100.15580000000001L 80.24146205357142 100.15580000000001Q 90.24146205357142 100.15580000000001 90.24146205357142 110.15580000000001L 90.24146205357142 110.15580000000001L 90.24146205357142 120.638Q 90.24146205357142 130.638 80.24146205357142 130.638L 86.13130580357142 130.638Q 76.13130580357142 130.638 76.13130580357142 120.638z"
                                                    pathFrom="M 76.13130580357142 120.638L 76.13130580357142 120.638L 90.24146205357142 120.638L 90.24146205357142 120.638L 90.24146205357142 120.638L 90.24146205357142 120.638L 90.24146205357142 120.638L 76.13130580357142 120.638"
                                                    cy="100.15580000000001" cx="130.5888950892857" j="1" val="7"
                                                    barHeight="30.482199999999995" barWidth="20.11015625"></path>
                                                <path id="SvgjsPath2223"
                                                    d="M 133.5888950892857 120.638L 133.5888950892857 75.31900000000002Q 133.5888950892857 65.31900000000002 143.5888950892857 65.31900000000002L 137.6990513392857 65.31900000000002Q 147.6990513392857 65.31900000000002 147.6990513392857 75.31900000000002L 147.6990513392857 75.31900000000002L 147.6990513392857 120.638Q 147.6990513392857 130.638 137.6990513392857 130.638L 143.5888950892857 130.638Q 133.5888950892857 130.638 133.5888950892857 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskdcvm6dk8)"
                                                    pathTo="M 133.5888950892857 120.638L 133.5888950892857 75.31900000000002Q 133.5888950892857 65.31900000000002 143.5888950892857 65.31900000000002L 137.6990513392857 65.31900000000002Q 147.6990513392857 65.31900000000002 147.6990513392857 75.31900000000002L 147.6990513392857 75.31900000000002L 147.6990513392857 120.638Q 147.6990513392857 130.638 137.6990513392857 130.638L 143.5888950892857 130.638Q 133.5888950892857 130.638 133.5888950892857 120.638z"
                                                    pathFrom="M 133.5888950892857 120.638L 133.5888950892857 120.638L 147.6990513392857 120.638L 147.6990513392857 120.638L 147.6990513392857 120.638L 147.6990513392857 120.638L 147.6990513392857 120.638L 133.5888950892857 120.638"
                                                    cy="65.31900000000002" cx="188.04648437499998" j="2" val="15"
                                                    barHeight="65.31899999999999" barWidth="20.11015625"></path>
                                                <path id="SvgjsPath2224"
                                                    d="M 191.04648437499998 120.638L 191.04648437499998 14.35460000000002Q 191.04648437499998 4.354600000000019 201.04648437499998 4.354600000000019L 195.15664062499997 4.354600000000019Q 205.15664062499997 4.354600000000019 205.15664062499997 14.35460000000002L 205.15664062499997 14.35460000000002L 205.15664062499997 120.638Q 205.15664062499997 130.638 195.15664062499997 130.638L 201.04648437499998 130.638Q 191.04648437499998 130.638 191.04648437499998 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskdcvm6dk8)"
                                                    pathTo="M 191.04648437499998 120.638L 191.04648437499998 14.35460000000002Q 191.04648437499998 4.354600000000019 201.04648437499998 4.354600000000019L 195.15664062499997 4.354600000000019Q 205.15664062499997 4.354600000000019 205.15664062499997 14.35460000000002L 205.15664062499997 14.35460000000002L 205.15664062499997 120.638Q 205.15664062499997 130.638 195.15664062499997 130.638L 201.04648437499998 130.638Q 191.04648437499998 130.638 191.04648437499998 120.638z"
                                                    pathFrom="M 191.04648437499998 120.638L 191.04648437499998 120.638L 205.15664062499997 120.638L 205.15664062499997 120.638L 205.15664062499997 120.638L 205.15664062499997 120.638L 205.15664062499997 120.638L 191.04648437499998 120.638"
                                                    cy="4.354600000000019" cx="245.50407366071425" j="3" val="29"
                                                    barHeight="126.28339999999999" barWidth="20.11015625"></path>
                                                <path id="SvgjsPath2225"
                                                    d="M 248.50407366071425 120.638L 248.50407366071425 62.255200000000016Q 248.50407366071425 52.255200000000016 258.50407366071425 52.255200000000016L 252.61422991071424 52.255200000000016Q 262.61422991071424 52.255200000000016 262.61422991071424 62.255200000000016L 262.61422991071424 62.255200000000016L 262.61422991071424 120.638Q 262.61422991071424 130.638 252.61422991071424 130.638L 258.50407366071425 130.638Q 248.50407366071425 130.638 248.50407366071425 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskdcvm6dk8)"
                                                    pathTo="M 248.50407366071425 120.638L 248.50407366071425 62.255200000000016Q 248.50407366071425 52.255200000000016 258.50407366071425 52.255200000000016L 252.61422991071424 52.255200000000016Q 262.61422991071424 52.255200000000016 262.61422991071424 62.255200000000016L 262.61422991071424 62.255200000000016L 262.61422991071424 120.638Q 262.61422991071424 130.638 252.61422991071424 130.638L 258.50407366071425 130.638Q 248.50407366071425 130.638 248.50407366071425 120.638z"
                                                    pathFrom="M 248.50407366071425 120.638L 248.50407366071425 120.638L 262.61422991071424 120.638L 262.61422991071424 120.638L 262.61422991071424 120.638L 262.61422991071424 120.638L 262.61422991071424 120.638L 248.50407366071425 120.638"
                                                    cy="52.255200000000016" cx="302.96166294642853" j="4" val="18"
                                                    barHeight="78.38279999999999" barWidth="20.11015625"></path>
                                                <path id="SvgjsPath2226"
                                                    d="M 305.96166294642853 120.638L 305.96166294642853 88.3828Q 305.96166294642853 78.3828 315.96166294642853 78.3828L 310.0718191964285 78.3828Q 320.0718191964285 78.3828 320.0718191964285 88.3828L 320.0718191964285 88.3828L 320.0718191964285 120.638Q 320.0718191964285 130.638 310.0718191964285 130.638L 315.96166294642853 130.638Q 305.96166294642853 130.638 305.96166294642853 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskdcvm6dk8)"
                                                    pathTo="M 305.96166294642853 120.638L 305.96166294642853 88.3828Q 305.96166294642853 78.3828 315.96166294642853 78.3828L 310.0718191964285 78.3828Q 320.0718191964285 78.3828 320.0718191964285 88.3828L 320.0718191964285 88.3828L 320.0718191964285 120.638Q 320.0718191964285 130.638 310.0718191964285 130.638L 315.96166294642853 130.638Q 305.96166294642853 130.638 305.96166294642853 120.638z"
                                                    pathFrom="M 305.96166294642853 120.638L 305.96166294642853 120.638L 320.0718191964285 120.638L 320.0718191964285 120.638L 320.0718191964285 120.638L 320.0718191964285 120.638L 320.0718191964285 120.638L 305.96166294642853 120.638"
                                                    cy="78.3828" cx="360.4192522321428" j="5" val="12"
                                                    barHeight="52.255199999999995" barWidth="20.11015625"></path>
                                                <path id="SvgjsPath2227"
                                                    d="M 363.4192522321428 120.638L 363.4192522321428 101.44660000000002Q 363.4192522321428 91.44660000000002 373.4192522321428 91.44660000000002L 367.5294084821428 91.44660000000002Q 377.5294084821428 91.44660000000002 377.5294084821428 101.44660000000002L 377.5294084821428 101.44660000000002L 377.5294084821428 120.638Q 377.5294084821428 130.638 367.5294084821428 130.638L 373.4192522321428 130.638Q 363.4192522321428 130.638 363.4192522321428 120.638z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMaskdcvm6dk8)"
                                                    pathTo="M 363.4192522321428 120.638L 363.4192522321428 101.44660000000002Q 363.4192522321428 91.44660000000002 373.4192522321428 91.44660000000002L 367.5294084821428 91.44660000000002Q 377.5294084821428 91.44660000000002 377.5294084821428 101.44660000000002L 377.5294084821428 101.44660000000002L 377.5294084821428 120.638Q 377.5294084821428 130.638 367.5294084821428 130.638L 373.4192522321428 130.638Q 363.4192522321428 130.638 363.4192522321428 120.638z"
                                                    pathFrom="M 363.4192522321428 120.638L 363.4192522321428 120.638L 377.5294084821428 120.638L 377.5294084821428 120.638L 377.5294084821428 120.638L 377.5294084821428 120.638L 377.5294084821428 120.638L 363.4192522321428 120.638"
                                                    cy="91.44660000000002" cx="417.8768415178571" j="6" val="9"
                                                    barHeight="39.191399999999994" barWidth="20.11015625"></path>
                                            </g>
                                            <g id="SvgjsG2228" class="apexcharts-series" seriesName="2020" rel="2"
                                                data:realIndex="1">
                                                <path id="SvgjsPath2230"
                                                    d="M 18.673716517857144 150.638L 18.673716517857144 187.24779999999998Q 18.673716517857144 197.24779999999998 28.673716517857144 197.24779999999998L 22.783872767857147 197.24779999999998Q 32.78387276785715 197.24779999999998 32.78387276785715 187.24779999999998L 32.78387276785715 187.24779999999998L 32.78387276785715 150.638Q 32.78387276785715 140.638 22.783872767857147 140.638L 28.673716517857144 140.638Q 18.673716517857144 140.638 18.673716517857144 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskdcvm6dk8)"
                                                    pathTo="M 18.673716517857144 150.638L 18.673716517857144 187.24779999999998Q 18.673716517857144 197.24779999999998 28.673716517857144 197.24779999999998L 22.783872767857147 197.24779999999998Q 32.78387276785715 197.24779999999998 32.78387276785715 187.24779999999998L 32.78387276785715 187.24779999999998L 32.78387276785715 150.638Q 32.78387276785715 140.638 22.783872767857147 140.638L 28.673716517857144 140.638Q 18.673716517857144 140.638 18.673716517857144 150.638z"
                                                    pathFrom="M 18.673716517857144 150.638L 18.673716517857144 150.638L 32.78387276785715 150.638L 32.78387276785715 150.638L 32.78387276785715 150.638L 32.78387276785715 150.638L 32.78387276785715 150.638L 18.673716517857144 150.638"
                                                    cy="177.24779999999998" cx="73.13130580357142" j="0" val="-13"
                                                    barHeight="-56.60979999999999" barWidth="20.11015625"></path>
                                                <path id="SvgjsPath2231"
                                                    d="M 76.13130580357142 150.638L 76.13130580357142 209.0208Q 76.13130580357142 219.0208 86.13130580357142 219.0208L 80.24146205357142 219.0208Q 90.24146205357142 219.0208 90.24146205357142 209.0208L 90.24146205357142 209.0208L 90.24146205357142 150.638Q 90.24146205357142 140.638 80.24146205357142 140.638L 86.13130580357142 140.638Q 76.13130580357142 140.638 76.13130580357142 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskdcvm6dk8)"
                                                    pathTo="M 76.13130580357142 150.638L 76.13130580357142 209.0208Q 76.13130580357142 219.0208 86.13130580357142 219.0208L 80.24146205357142 219.0208Q 90.24146205357142 219.0208 90.24146205357142 209.0208L 90.24146205357142 209.0208L 90.24146205357142 150.638Q 90.24146205357142 140.638 80.24146205357142 140.638L 86.13130580357142 140.638Q 76.13130580357142 140.638 76.13130580357142 150.638z"
                                                    pathFrom="M 76.13130580357142 150.638L 76.13130580357142 150.638L 90.24146205357142 150.638L 90.24146205357142 150.638L 90.24146205357142 150.638L 90.24146205357142 150.638L 90.24146205357142 150.638L 76.13130580357142 150.638"
                                                    cy="199.0208" cx="130.5888950892857" j="1" val="-18"
                                                    barHeight="-78.38279999999999" barWidth="20.11015625"></path>
                                                <path id="SvgjsPath2232"
                                                    d="M 133.5888950892857 150.638L 133.5888950892857 169.8294Q 133.5888950892857 179.8294 143.5888950892857 179.8294L 137.6990513392857 179.8294Q 147.6990513392857 179.8294 147.6990513392857 169.8294L 147.6990513392857 169.8294L 147.6990513392857 150.638Q 147.6990513392857 140.638 137.6990513392857 140.638L 143.5888950892857 140.638Q 133.5888950892857 140.638 133.5888950892857 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskdcvm6dk8)"
                                                    pathTo="M 133.5888950892857 150.638L 133.5888950892857 169.8294Q 133.5888950892857 179.8294 143.5888950892857 179.8294L 137.6990513392857 179.8294Q 147.6990513392857 179.8294 147.6990513392857 169.8294L 147.6990513392857 169.8294L 147.6990513392857 150.638Q 147.6990513392857 140.638 137.6990513392857 140.638L 143.5888950892857 140.638Q 133.5888950892857 140.638 133.5888950892857 150.638z"
                                                    pathFrom="M 133.5888950892857 150.638L 133.5888950892857 150.638L 147.6990513392857 150.638L 147.6990513392857 150.638L 147.6990513392857 150.638L 147.6990513392857 150.638L 147.6990513392857 150.638L 133.5888950892857 150.638"
                                                    cy="159.8294" cx="188.04648437499998" j="2" val="-9"
                                                    barHeight="-39.191399999999994" barWidth="20.11015625"></path>
                                                <path id="SvgjsPath2233"
                                                    d="M 191.04648437499998 150.638L 191.04648437499998 191.6024Q 191.04648437499998 201.6024 201.04648437499998 201.6024L 195.15664062499997 201.6024Q 205.15664062499997 201.6024 205.15664062499997 191.6024L 205.15664062499997 191.6024L 205.15664062499997 150.638Q 205.15664062499997 140.638 195.15664062499997 140.638L 201.04648437499998 140.638Q 191.04648437499998 140.638 191.04648437499998 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskdcvm6dk8)"
                                                    pathTo="M 191.04648437499998 150.638L 191.04648437499998 191.6024Q 191.04648437499998 201.6024 201.04648437499998 201.6024L 195.15664062499997 201.6024Q 205.15664062499997 201.6024 205.15664062499997 191.6024L 205.15664062499997 191.6024L 205.15664062499997 150.638Q 205.15664062499997 140.638 195.15664062499997 140.638L 201.04648437499998 140.638Q 191.04648437499998 140.638 191.04648437499998 150.638z"
                                                    pathFrom="M 191.04648437499998 150.638L 191.04648437499998 150.638L 205.15664062499997 150.638L 205.15664062499997 150.638L 205.15664062499997 150.638L 205.15664062499997 150.638L 205.15664062499997 150.638L 191.04648437499998 150.638"
                                                    cy="181.6024" cx="245.50407366071425" j="3" val="-14"
                                                    barHeight="-60.96439999999999" barWidth="20.11015625"></path>
                                                <path id="SvgjsPath2234"
                                                    d="M 248.50407366071425 150.638L 248.50407366071425 152.411Q 248.50407366071425 162.411 258.50407366071425 162.411L 252.61422991071424 162.411Q 262.61422991071424 162.411 262.61422991071424 152.411L 262.61422991071424 152.411L 262.61422991071424 150.638Q 262.61422991071424 140.638 252.61422991071424 140.638L 258.50407366071425 140.638Q 248.50407366071425 140.638 248.50407366071425 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskdcvm6dk8)"
                                                    pathTo="M 248.50407366071425 150.638L 248.50407366071425 152.411Q 248.50407366071425 162.411 258.50407366071425 162.411L 252.61422991071424 162.411Q 262.61422991071424 162.411 262.61422991071424 152.411L 262.61422991071424 152.411L 262.61422991071424 150.638Q 262.61422991071424 140.638 252.61422991071424 140.638L 258.50407366071425 140.638Q 248.50407366071425 140.638 248.50407366071425 150.638z"
                                                    pathFrom="M 248.50407366071425 150.638L 248.50407366071425 150.638L 262.61422991071424 150.638L 262.61422991071424 150.638L 262.61422991071424 150.638L 262.61422991071424 150.638L 262.61422991071424 150.638L 248.50407366071425 150.638"
                                                    cy="142.411" cx="302.96166294642853" j="4" val="-5"
                                                    barHeight="-21.772999999999996" barWidth="20.11015625"></path>
                                                <path id="SvgjsPath2235"
                                                    d="M 305.96166294642853 150.638L 305.96166294642853 204.6662Q 305.96166294642853 214.6662 315.96166294642853 214.6662L 310.0718191964285 214.6662Q 320.0718191964285 214.6662 320.0718191964285 204.6662L 320.0718191964285 204.6662L 320.0718191964285 150.638Q 320.0718191964285 140.638 310.0718191964285 140.638L 315.96166294642853 140.638Q 305.96166294642853 140.638 305.96166294642853 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskdcvm6dk8)"
                                                    pathTo="M 305.96166294642853 150.638L 305.96166294642853 204.6662Q 305.96166294642853 214.6662 315.96166294642853 214.6662L 310.0718191964285 214.6662Q 320.0718191964285 214.6662 320.0718191964285 204.6662L 320.0718191964285 204.6662L 320.0718191964285 150.638Q 320.0718191964285 140.638 310.0718191964285 140.638L 315.96166294642853 140.638Q 305.96166294642853 140.638 305.96166294642853 150.638z"
                                                    pathFrom="M 305.96166294642853 150.638L 305.96166294642853 150.638L 320.0718191964285 150.638L 320.0718191964285 150.638L 320.0718191964285 150.638L 320.0718191964285 150.638L 320.0718191964285 150.638L 305.96166294642853 150.638"
                                                    cy="194.6662" cx="360.4192522321428" j="5" val="-17"
                                                    barHeight="-74.0282" barWidth="20.11015625"></path>
                                                <path id="SvgjsPath2236"
                                                    d="M 363.4192522321428 150.638L 363.4192522321428 195.957Q 363.4192522321428 205.957 373.4192522321428 205.957L 367.5294084821428 205.957Q 377.5294084821428 205.957 377.5294084821428 195.957L 377.5294084821428 195.957L 377.5294084821428 150.638Q 377.5294084821428 140.638 367.5294084821428 140.638L 373.4192522321428 140.638Q 363.4192522321428 140.638 363.4192522321428 150.638z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMaskdcvm6dk8)"
                                                    pathTo="M 363.4192522321428 150.638L 363.4192522321428 195.957Q 363.4192522321428 205.957 373.4192522321428 205.957L 367.5294084821428 205.957Q 377.5294084821428 205.957 377.5294084821428 195.957L 377.5294084821428 195.957L 377.5294084821428 150.638Q 377.5294084821428 140.638 367.5294084821428 140.638L 373.4192522321428 140.638Q 363.4192522321428 140.638 363.4192522321428 150.638z"
                                                    pathFrom="M 363.4192522321428 150.638L 363.4192522321428 150.638L 377.5294084821428 150.638L 377.5294084821428 150.638L 377.5294084821428 150.638L 377.5294084821428 150.638L 377.5294084821428 150.638L 363.4192522321428 150.638"
                                                    cy="185.957" cx="417.8768415178571" j="6" val="-15"
                                                    barHeight="-65.31899999999999" barWidth="20.11015625"></path>
                                            </g>
                                            <g id="SvgjsG2220" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG2229" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine2285" x1="0" y1="0" x2="402.203125" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine2286" x1="0" y1="0" x2="402.203125" y2="0" stroke-dasharray="0"
                                            stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                                        </line>
                                        <g id="SvgjsG2287" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG2288" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG2289" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG2260" class="apexcharts-yaxis" rel="0" transform="translate(15.796875, 0)">
                                        <g id="SvgjsG2261" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2262"
                                                font-family="Helvetica, Arial, sans-serif" x="20" y="52.5" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2263">30</tspan>
                                                <title>30</title>
                                            </text><text id="SvgjsText2264" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="96.04599999999999" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2265">20</tspan>
                                                <title>20</title>
                                            </text><text id="SvgjsText2266" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="139.59199999999998" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2267">10</tspan>
                                                <title>10</title>
                                            </text><text id="SvgjsText2268" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="183.13799999999998" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2269">0</tspan>
                                                <title>0</title>
                                            </text><text id="SvgjsText2270" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="226.68399999999997" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2271">-10</tspan>
                                                <title>-10</title>
                                            </text><text id="SvgjsText2272" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="270.22999999999996" text-anchor="end" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2273">-20</tspan>
                                                <title>-20</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG2208" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(105, 108, 255);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(3, 195, 236);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 493px; height: 377px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                        id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        2022
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                        <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="growthChart" style="min-height: 154.875px;">
                            <div id="apexcharts1tf88d1q" class="apexcharts-canvas apexcharts1tf88d1q apexcharts-theme-light"
                                style="width: 246px; height: 154.875px;"><svg id="SvgjsSvg2290" width="246" height="154.875"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG2292" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(16, -25)">
                                        <defs id="SvgjsDefs2291">
                                            <clipPath id="gridRectMask1tf88d1q">
                                                <rect id="SvgjsRect2294" width="222" height="285" x="-3" y="-1" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask1tf88d1q"></clipPath>
                                            <clipPath id="nonForecastMask1tf88d1q"></clipPath>
                                            <clipPath id="gridRectMarkerMask1tf88d1q">
                                                <rect id="SvgjsRect2295" width="220" height="287" x="-2" y="-2" rx="0"
                                                    ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient2300" x1="1" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop2301" stop-opacity="1" stop-color="rgba(105,108,255,1)"
                                                    offset="0.3"></stop>
                                                <stop id="SvgjsStop2302" stop-opacity="0.6"
                                                    stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop2303" stop-opacity="0.6"
                                                    stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient2311" x1="1" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop2312" stop-opacity="1" stop-color="rgba(105,108,255,1)"
                                                    offset="0.3"></stop>
                                                <stop id="SvgjsStop2313" stop-opacity="0.6"
                                                    stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop2314" stop-opacity="0.6"
                                                    stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="SvgjsG2296" class="apexcharts-radialbar">
                                            <g id="SvgjsG2297">
                                                <g id="SvgjsG2298" class="apexcharts-tracks">
                                                    <g id="SvgjsG2299" class="apexcharts-radialbar-track apexcharts-track"
                                                        rel="1">
                                                        <path id="apexcharts-radialbarTrack-0"
                                                            d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"
                                                            fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)"
                                                            stroke-opacity="1" stroke-linecap="butt"
                                                            stroke-width="17.357317073170734" stroke-dasharray="0"
                                                            class="apexcharts-radialbar-area"
                                                            data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG2305">
                                                    <g id="SvgjsG2310" class="apexcharts-series apexcharts-radial-series"
                                                        seriesName="Growth" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath2315"
                                                            d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"
                                                            fill="none" fill-opacity="0.85"
                                                            stroke="url(#SvgjsLinearGradient2311)" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="17.357317073170734"
                                                            stroke-dasharray="5"
                                                            class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                            data:angle="234" data:value="78" index="0" j="0"
                                                            data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481">
                                                        </path>
                                                    </g>
                                                    <circle id="SvgjsCircle2306" r="54.65121951219512" cx="108" cy="108"
                                                        class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                    <g id="SvgjsG2307" class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)" style="opacity: 1;"><text
                                                            id="SvgjsText2308" font-family="Public Sans" x="108" y="123"
                                                            text-anchor="middle" dominant-baseline="auto" font-size="15px"
                                                            font-weight="500" fill="#566a7f"
                                                            class="apexcharts-text apexcharts-datalabel-label"
                                                            style="font-family: &quot;Public Sans&quot;;">Growth</text><text
                                                            id="SvgjsText2309" font-family="Public Sans" x="108" y="99"
                                                            text-anchor="middle" dominant-baseline="auto" font-size="22px"
                                                            font-weight="500" fill="#566a7f"
                                                            class="apexcharts-text apexcharts-datalabel-value"
                                                            style="font-family: &quot;Public Sans&quot;;">78%</text></g>
                                                </g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine2316" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6"
                                            stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine2317" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0"
                                            stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                                        </line>
                                    </g>
                                    <g id="SvgjsG2293" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                            </div>
                        </div>
                        <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-primary p-2"><i
                                            class="bx bx-dollar text-primary"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2022</small>
                                    <h6 class="mb-0">$32.5k</h6>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2021</small>
                                    <h6 class="mb-0">$41.2k</h6>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 247px; height: 377px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Total Revenue -->
        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="d-block mb-1">Payments</span>
                            <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                            <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Transactions</span>
                            <h3 class="card-title mb-2">$14,857</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                        </div>
                    </div>
                </div>
                <!-- </div>
            <div class="row"> -->
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3"
                                style="position: relative;">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">Profile Report</h5>
                                        <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <small class="text-success text-nowrap fw-semibold"><i class="bx bx-chevron-up"></i>
                                            68.2%</small>
                                        <h3 class="mb-0">$84,686k</h3>
                                    </div>
                                </div>
                                <div id="profileReportChart" style="min-height: 80px;">
                                    <div id="apexchartsh8hv85wuj"
                                        class="apexcharts-canvas apexchartsh8hv85wuj apexcharts-theme-light"
                                        style="width: 170px; height: 80px;"><svg id="SvgjsSvg2319" width="170" height="80"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG2321" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs2320">
                                                    <clipPath id="gridRectMaskh8hv85wuj">
                                                        <rect id="SvgjsRect2326" width="171" height="85" x="-4.5" y="-2.5"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskh8hv85wuj"></clipPath>
                                                    <clipPath id="nonForecastMaskh8hv85wuj"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskh8hv85wuj">
                                                        <rect id="SvgjsRect2327" width="166" height="84" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <filter id="SvgjsFilter2333" filterUnits="userSpaceOnUse" width="200%"
                                                        height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood2334" flood-color="#ffab00"
                                                            flood-opacity="0.15" result="SvgjsFeFlood2334Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite2335" in="SvgjsFeFlood2334Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite2335Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset2336" dx="5" dy="10"
                                                            result="SvgjsFeOffset2336Out" in="SvgjsFeComposite2335Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur2337" stdDeviation="3 "
                                                            result="SvgjsFeGaussianBlur2337Out" in="SvgjsFeOffset2336Out">
                                                        </feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge2338" result="SvgjsFeMerge2338Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode2339"
                                                                in="SvgjsFeGaussianBlur2337Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode2340" in="[object Arguments]">
                                                            </feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend2341" in="SourceGraphic"
                                                            in2="SvgjsFeMerge2338Out" mode="normal"
                                                            result="SvgjsFeBlend2341Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <line id="SvgjsLine2325" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80"
                                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG2342" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG2343" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG2351" class="apexcharts-grid">
                                                    <g id="SvgjsG2352" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine2354" x1="0" y1="0" x2="162" y2="0"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2355" x1="0" y1="20" x2="162" y2="20"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2356" x1="0" y1="40" x2="162" y2="40"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2357" x1="0" y1="60" x2="162" y2="60"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2358" x1="0" y1="80" x2="162" y2="80"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG2353" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine2360" x1="0" y1="80" x2="162" y2="80"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine2359" x1="0" y1="1" x2="0" y2="80"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG2328" class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG2329" class="apexcharts-series" seriesName="seriesx1"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath2332"
                                                            d="M 0 76C 11.339999999999998 76 21.060000000000002 12 32.4 12C 43.739999999999995 12 53.46 62 64.8 62C 76.14 62 85.86 22 97.2 22C 108.53999999999999 22 118.25999999999999 38 129.6 38C 140.94 38 150.66 6 162 6"
                                                            fill="none" fill-opacity="1" stroke="rgba(255,171,0,0.85)"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                            stroke-dasharray="0" class="apexcharts-line" index="0"
                                                            clip-path="url(#gridRectMaskh8hv85wuj)"
                                                            filter="url(#SvgjsFilter2333)"
                                                            pathTo="M 0 76C 11.339999999999998 76 21.060000000000002 12 32.4 12C 43.739999999999995 12 53.46 62 64.8 62C 76.14 62 85.86 22 97.2 22C 108.53999999999999 22 118.25999999999999 38 129.6 38C 140.94 38 150.66 6 162 6"
                                                            pathFrom="M -1 120L -1 120L 32.4 120L 64.8 120L 97.2 120L 129.6 120L 162 120">
                                                        </path>
                                                        <g id="SvgjsG2330" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2366" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker weh8d2ia4 no-pointer-events"
                                                                    stroke="#ffffff" fill="#ffab00" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2331" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine2361" x1="0" y1="0" x2="162" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2362" x1="0" y1="0" x2="162" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG2363" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG2364" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG2365" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect2324" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fefefe"></rect>
                                            <g id="SvgjsG2350" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG2322" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 171, 0);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 309px; height: 117px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection















@section('menu')
    @include('admin.dashboard.menu')
@endsection


