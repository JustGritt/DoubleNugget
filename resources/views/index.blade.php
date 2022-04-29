<!doctype html>
<html lang="en">

<!-- Head -->

<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Custom Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon/favicon-16x16.png')}}">
    <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <!-- <link rel="stylesheet" href="{{asset('css/libs.bundle.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/theme.bundle.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs.bundle.css')}}">

    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
            /**
          * Reinstate scrolling for non-JS clients
          */
            .simplebar-content-wrapper {
                overflow: auto;
            }
        </style>
    </noscript>

    <!-- Page Title -->
    <title>DoubleNuggets</title>

</head>

<body class="">

    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white flex-column border-0  ">
        <div class="container-fluid">
            <div class="w-100">
                <div class="d-flex justify-content-between align-items-center flex-wrap">

                    <!-- Logo-->
                    <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 order-0" href="./index">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="50" viewBox="0 0 360 200" version="1.1"><path d="M 184.406 43.857 C 182.154 44.760, 179.413 46.175, 178.314 47 C 177.215 47.825, 171.026 55.413, 164.560 63.863 C 158.094 72.313, 152.165 80.754, 151.385 82.622 C 150.604 84.489, 150.237 87.095, 150.568 88.414 C 150.899 89.732, 152.170 91.751, 153.393 92.900 C 154.616 94.049, 158.932 96.116, 162.984 97.494 C 167.035 98.873, 170.945 100, 171.672 100 C 172.399 100, 174.769 98.396, 176.939 96.436 C 179.108 94.476, 181.569 90.989, 182.408 88.686 C 183.246 86.384, 185.332 75.635, 187.043 64.799 C 188.854 53.334, 189.809 44.496, 189.327 43.656 C 188.613 42.410, 187.941 42.438, 184.406 43.857 M 202.741 55.179 C 203.424 56.007, 203.690 56.976, 203.333 57.333 C 202.976 57.690, 202.007 57.424, 201.179 56.741 C 199.948 55.725, 199.765 55.772, 200.171 57 C 200.443 57.825, 201.529 58.500, 202.583 58.500 C 203.806 58.500, 204.500 57.806, 204.500 56.583 C 204.500 55.529, 203.825 54.443, 203 54.171 C 201.772 53.765, 201.725 53.948, 202.741 55.179 M 209.500 57 C 207.870 57.701, 207.812 57.872, 209.191 57.930 C 210.121 57.968, 211.160 57.550, 211.500 57 C 211.840 56.450, 211.979 56.032, 211.809 56.070 C 211.639 56.109, 210.600 56.527, 209.500 57 M 222.168 58.150 C 222.076 59.607, 220.455 63.095, 218.567 65.901 C 216.679 68.706, 210.838 76.587, 205.587 83.413 C 200.336 90.239, 194.845 96.764, 193.385 97.912 C 191.925 99.060, 191.271 100, 191.931 100 C 192.591 100, 193.928 99.574, 194.902 99.052 C 195.876 98.531, 202.627 90.257, 209.904 80.664 C 222.358 64.247, 223.111 62.998, 222.735 59.362 C 222.481 56.898, 222.275 56.459, 222.168 58.150 M 170.364 61.493 C 170.018 62.396, 170.214 63.614, 170.800 64.200 C 171.386 64.786, 172.604 64.982, 173.507 64.636 C 174.409 64.289, 174.997 63.222, 174.812 62.265 C 174.628 61.307, 173.693 60.372, 172.735 60.188 C 171.778 60.003, 170.711 60.591, 170.364 61.493 M 199.510 61.016 C 199.856 61.575, 200.557 61.774, 201.069 61.457 C 201.581 61.141, 202 60.684, 202 60.441 C 202 60.198, 201.298 60, 200.441 60 C 199.584 60, 199.165 60.457, 199.510 61.016 M 207.374 60.689 C 207.742 61.342, 207.245 62.341, 206.271 62.908 C 204.660 63.846, 204.652 63.942, 206.191 63.970 C 207.121 63.986, 208.184 63.511, 208.554 62.913 C 208.923 62.315, 208.659 61.302, 207.966 60.663 C 207.006 59.777, 206.866 59.783, 207.374 60.689 M 200 67 C 200 67.550, 200.450 68, 201 68 C 201.550 68, 202 67.550, 202 67 C 202 66.450, 201.550 66, 201 66 C 200.450 66, 200 66.450, 200 67 M 206.150 66.950 C 206.370 67.610, 206.876 68.116, 207.275 68.075 C 207.674 68.034, 208.034 67.674, 208.075 67.275 C 208.116 66.876, 207.610 66.370, 206.950 66.150 C 206.290 65.930, 205.930 66.290, 206.150 66.950 M 111 134 C 111 154, 111 154, 114.417 154 C 116.296 154, 117.990 153.531, 118.180 152.959 C 118.399 152.303, 119.711 152.508, 121.723 153.512 C 123.849 154.572, 126.076 154.889, 128.375 154.458 C 130.275 154.101, 132.808 152.769, 134.002 151.498 C 135.540 149.861, 136.331 147.440, 136.716 143.193 C 137.015 139.896, 136.947 135.528, 136.564 133.487 C 136.181 131.446, 134.793 128.702, 133.479 127.388 C 131.736 125.645, 129.980 125, 126.980 125 C 124.719 125, 121.998 125.466, 120.934 126.035 C 119.114 127.010, 119 126.686, 119 120.535 C 119 114, 119 114, 115 114 C 111 114, 111 114, 111 134 M 139 134 C 139 154, 139 154, 143 154 C 147 154, 147 154, 147 134 C 147 114, 147 114, 143 114 C 139 114, 139 114, 139 134 M 26 135.591 C 26 154.182, 26 154.182, 36.483 153.841 C 46.800 153.505, 47.018 153.448, 50.233 150.232 C 53.373 147.090, 53.514 146.609, 53.856 137.807 C 54.057 132.633, 53.707 126.966, 53.052 124.778 C 52.283 122.211, 50.813 120.247, 48.696 118.956 C 46.107 117.377, 43.649 117.007, 35.750 117.004 C 26 117, 26 117, 26 135.591 M 34 134.864 C 34 147, 34 147, 38.429 147 C 41.005 147, 43.476 146.381, 44.337 145.520 C 45.151 144.706, 46.125 142.222, 46.500 140 C 46.875 137.779, 46.877 133.743, 46.504 131.031 C 46.131 128.319, 45.257 125.629, 44.562 125.052 C 43.867 124.475, 41.206 123.716, 38.649 123.365 C 34 122.728, 34 122.728, 34 134.864 M 59.777 127.908 C 56.700 130.657, 56.506 131.242, 56.211 138.658 C 55.953 145.133, 56.248 147.057, 57.904 149.699 C 59.306 151.936, 61.151 153.233, 64.038 154.010 C 66.309 154.622, 69.592 154.825, 71.334 154.463 C 73.075 154.100, 75.550 153.138, 76.834 152.324 C 78.117 151.510, 79.804 149.319, 80.584 147.454 C 81.363 145.590, 81.997 142.362, 81.994 140.282 C 81.991 138.202, 81.526 134.833, 80.960 132.795 C 80.394 130.758, 78.761 128.171, 77.331 127.045 C 75.384 125.514, 73.259 125, 68.881 125 C 63.836 125, 62.584 125.400, 59.777 127.908 M 84 136.865 C 84 147.240, 84.253 149.052, 86.012 151.288 C 87.119 152.695, 89.322 154.132, 90.909 154.480 C 92.618 154.855, 95.260 154.500, 97.396 153.608 C 99.378 152.780, 101 152.529, 101 153.051 C 101 153.573, 102.575 154, 104.500 154 C 108 154, 108 154, 108 139.440 C 108 124.879, 108 124.879, 104.250 125.190 C 100.500 125.500, 100.500 125.500, 100.210 134.966 C 99.995 141.965, 99.498 144.897, 98.305 146.216 C 97.417 147.197, 95.950 148, 95.045 148 C 94.140 148, 92.860 147.460, 92.200 146.800 C 91.422 146.022, 91 141.978, 91 135.300 C 91 125, 91 125, 87.500 125 C 84 125, 84 125, 84 136.865 M 152.777 127.908 C 149.700 130.657, 149.506 131.242, 149.211 138.658 C 148.953 145.133, 149.248 147.057, 150.904 149.699 C 152.317 151.954, 154.150 153.233, 157.114 154.031 C 159.426 154.653, 162.890 154.868, 164.810 154.508 C 166.730 154.148, 169.583 152.571, 171.150 151.003 C 172.718 149.436, 174 147.444, 174 146.577 C 174 145.452, 173.031 145, 170.622 145 C 168.765 145, 166.666 145.698, 165.958 146.551 C 165.131 147.547, 163.413 147.994, 161.152 147.801 C 158.270 147.554, 157.500 147.002, 156.903 144.750 C 156.173 142, 156.173 142, 165.086 142 C 174 142, 174 142, 174 137.547 C 174 135.098, 173.462 131.914, 172.805 130.472 C 172.148 129.030, 170.371 127.209, 168.855 126.425 C 167.339 125.641, 163.834 125, 161.065 125 C 156.921 125, 155.457 125.514, 152.777 127.908 M 65 132.501 C 64.315 133.326, 63.566 135.913, 63.336 138.251 C 63.099 140.651, 63.489 143.588, 64.232 145 C 65.057 146.570, 66.583 147.620, 68.334 147.822 C 69.867 147.999, 71.769 147.607, 72.560 146.950 C 73.511 146.161, 74 143.782, 74 139.949 C 74 136.004, 73.496 133.639, 72.429 132.571 C 71.564 131.707, 69.819 131, 68.551 131 C 67.283 131, 65.684 131.675, 65 132.501 M 121 133 C 119.550 134.450, 119 136.333, 119 139.845 C 119 143.269, 119.536 145.175, 120.829 146.345 C 121.835 147.255, 123.811 148, 125.222 148 C 126.638 148, 128.058 147.292, 128.393 146.418 C 128.727 145.548, 129 142.263, 129 139.118 C 129 135.973, 128.460 132.860, 127.800 132.200 C 127.140 131.540, 125.790 131, 124.800 131 C 123.810 131, 122.100 131.900, 121 133 M 158.200 132.200 C 157.540 132.860, 157 133.985, 157 134.700 C 157 135.593, 158.564 136, 162 136 C 164.750 136, 167 135.745, 167 135.434 C 167 135.123, 166.534 133.998, 165.965 132.934 C 165.325 131.738, 163.875 131, 162.165 131 C 160.644 131, 158.860 131.540, 158.200 132.200" stroke="none" fill="#ec5604" fill-rule="evenodd"/><path d="M 164.500 37.892 C 159.550 38.825, 154.549 40.114, 153.387 40.756 C 152.225 41.398, 149.832 43.566, 148.070 45.573 C 146.308 47.580, 144.435 50.357, 143.907 51.744 C 143.380 53.131, 141.610 62.542, 139.974 72.659 C 138.338 82.775, 137 92.750, 137 94.826 C 137 96.902, 137.521 99.121, 138.158 99.758 C 139.034 100.634, 138.996 101.300, 138 102.500 C 137.060 103.632, 136.992 104.392, 137.762 105.162 C 138.354 105.754, 140.788 106.637, 143.170 107.124 C 145.551 107.610, 155.150 108.291, 164.500 108.635 C 174.948 109.021, 185.490 108.824, 191.854 108.124 C 197.549 107.498, 203.309 106.710, 204.654 106.372 C 206.159 105.994, 206.984 105.156, 206.798 104.192 C 206.633 103.331, 205.148 102.303, 203.498 101.908 C 201.849 101.513, 198.341 100.891, 195.702 100.526 C 190.904 99.863, 190.904 99.863, 193.472 97.844 C 194.884 96.733, 200.336 90.239, 205.587 83.413 C 210.838 76.587, 216.679 68.706, 218.567 65.901 C 220.707 62.721, 222 59.589, 222 57.587 C 222 55.370, 221.147 53.579, 219.250 51.811 C 217.727 50.391, 211.901 47.630, 206.193 45.624 C 200.524 43.631, 194.786 42, 193.443 42 C 191.522 42, 191 42.520, 191 44.431 C 191 45.767, 189.655 55.330, 188.012 65.681 C 186.368 76.031, 184.542 86.215, 183.953 88.312 C 183.364 90.409, 181.282 93.896, 179.325 96.062 C 176.850 98.801, 174.943 100, 173.059 100 C 171.569 100, 167.035 98.873, 162.984 97.494 C 158.932 96.116, 154.616 94.049, 153.393 92.900 C 152.170 91.751, 150.899 89.732, 150.568 88.414 C 150.237 87.095, 150.604 84.489, 151.385 82.622 C 152.165 80.754, 158.079 72.339, 164.527 63.922 C 170.975 55.504, 177.207 47.818, 178.375 46.841 C 179.544 45.864, 182.075 44.546, 184 43.912 C 185.925 43.277, 187.893 42.398, 188.373 41.956 C 188.853 41.515, 188.086 39.995, 186.668 38.577 C 184.511 36.420, 183.227 36.016, 178.795 36.098 C 175.883 36.152, 169.450 36.959, 164.500 37.892 M 200.992 55.509 C 200.048 56.647, 199.988 57.388, 200.775 58.175 C 201.375 58.775, 202.604 58.982, 203.507 58.636 C 204.409 58.289, 205.002 57.254, 204.824 56.336 C 204.646 55.417, 204.005 54.501, 203.400 54.300 C 202.795 54.098, 201.712 54.642, 200.992 55.509 M 208.658 54.675 C 208.296 55.037, 208 55.933, 208 56.667 C 208 57.400, 208.648 58, 209.441 58 C 210.234 58, 211.129 57.601, 211.430 57.113 C 211.731 56.626, 211.379 55.730, 210.647 55.122 C 209.915 54.514, 209.020 54.313, 208.658 54.675 M 156.597 57.844 C 156.251 58.404, 156.455 59.163, 157.050 59.531 C 157.646 59.899, 158.411 59.923, 158.750 59.583 C 159.089 59.244, 158.885 58.485, 158.296 57.896 C 157.578 57.178, 157.019 57.161, 156.597 57.844 M 199.510 61.016 C 199.856 61.575, 200.557 61.774, 201.069 61.457 C 201.581 61.141, 202 60.684, 202 60.441 C 202 60.198, 201.298 60, 200.441 60 C 199.584 60, 199.165 60.457, 199.510 61.016 M 205 62 C 205 63.506, 205.522 64.046, 206.750 63.810 C 207.713 63.624, 208.500 62.810, 208.500 62 C 208.500 61.190, 207.713 60.376, 206.750 60.190 C 205.522 59.954, 205 60.494, 205 62 M 200 67 C 200 67.550, 200.450 68, 201 68 C 201.550 68, 202 67.550, 202 67 C 202 66.450, 201.550 66, 201 66 C 200.450 66, 200 66.450, 200 67 M 206.150 66.950 C 206.370 67.610, 206.876 68.116, 207.275 68.075 C 207.674 68.034, 208.034 67.674, 208.075 67.275 C 208.116 66.876, 207.610 66.370, 206.950 66.150 C 206.290 65.930, 205.930 66.290, 206.150 66.950 M 149.441 72.096 C 149.068 72.699, 149.379 73.807, 150.132 74.560 C 150.991 75.419, 152.019 75.607, 152.896 75.065 C 153.664 74.590, 154.015 73.483, 153.677 72.601 C 153.339 71.720, 152.400 71, 151.590 71 C 150.781 71, 149.813 71.493, 149.441 72.096 M 177 135.443 C 177 154, 177 154, 180.500 154 C 184 154, 184 154, 184.010 141.250 C 184.020 128.500, 184.020 128.500, 191.260 141.245 C 198.500 153.989, 198.500 153.989, 202.250 153.995 C 206 154, 206 154, 206 135.500 C 206 117, 206 117, 202.532 117 C 199.063 117, 199.063 117, 198.782 128.749 C 198.500 140.498, 198.500 140.498, 191.981 128.999 C 185.463 117.500, 185.463 117.500, 181.231 117.193 C 177 116.885, 177 116.885, 177 135.443 M 320 121.500 C 320 124.333, 319.619 125, 318 125 C 316.444 125, 316 125.667, 316 128 C 316 130.333, 316.444 131, 318 131 C 319.853 131, 320 131.667, 320 140.045 C 320 148.316, 320.210 149.301, 322.455 151.545 C 324.341 153.432, 325.962 154, 329.455 154 C 333.838 154, 334 153.893, 334 151 C 334 148.358, 333.655 148, 331.107 148 C 329.391 148, 327.967 147.356, 327.607 146.418 C 327.273 145.548, 327 141.723, 327 137.918 C 327 131, 327 131, 330.566 131 C 333.867 131, 334.109 130.795, 333.816 128.250 C 333.553 125.959, 332.958 125.448, 330.250 125.187 C 327.275 124.900, 327 124.583, 327 121.437 C 327 118.176, 326.821 118, 323.500 118 C 320.167 118, 320 118.167, 320 121.500 M 210 137.066 C 210 143.702, 210.457 149.986, 211.016 151.030 C 211.575 152.075, 213.734 153.439, 215.814 154.063 C 218.874 154.979, 220.303 154.900, 223.298 153.649 C 225.334 152.798, 227 152.529, 227 153.051 C 227 153.573, 228.587 154, 230.527 154 C 234.055 154, 234.055 154, 233.777 139.750 C 233.500 125.500, 233.500 125.500, 230 125.500 C 226.500 125.500, 226.500 125.500, 226.210 134.966 C 225.995 141.965, 225.498 144.897, 224.305 146.216 C 223.417 147.197, 221.950 148, 221.045 148 C 220.140 148, 218.860 147.460, 218.200 146.800 C 217.422 146.022, 217 141.978, 217 135.300 C 217 125, 217 125, 213.500 125 C 210 125, 210 125, 210 137.066 M 240.656 126.133 C 239.642 126.722, 238.180 128.719, 237.406 130.570 C 236.633 132.421, 236 136.133, 236 138.819 C 236 141.504, 236.499 145.132, 237.108 146.881 C 237.728 148.660, 239.469 150.708, 241.059 151.530 C 242.622 152.339, 245.019 153, 246.385 153 C 247.752 153, 250.024 152.561, 251.435 152.025 C 253.723 151.155, 254 151.296, 254 153.325 C 254 154.576, 253.460 156.140, 252.800 156.800 C 252.140 157.460, 250.131 158, 248.335 158 C 246.094 158, 244.735 157.373, 244 156 C 243.299 154.690, 241.906 154, 239.965 154 C 237.709 154, 237 154.459, 237 155.918 C 237 156.973, 237.280 158.565, 237.621 159.455 C 237.963 160.346, 239.515 161.732, 241.072 162.537 C 242.628 163.342, 246.433 164, 249.527 164 C 254.413 164, 255.539 163.615, 258.077 161.077 C 261 158.154, 261 158.154, 261 141.577 C 261 125, 261 125, 258 125 C 255.951 125, 255 125.494, 255 126.557 C 255 127.966, 254.789 127.966, 252.777 126.557 C 251.555 125.701, 248.743 125.014, 246.527 125.030 C 244.312 125.047, 241.670 125.543, 240.656 126.133 M 267.318 127.403 C 264.767 129.597, 264.496 130.491, 264.211 137.653 C 263.953 144.131, 264.248 146.057, 265.901 148.696 C 267.351 151.009, 268.937 152.085, 271.643 152.593 C 273.806 152.999, 276.644 152.818, 278.375 152.165 C 280.021 151.543, 281.594 151.261, 281.870 151.537 C 282.146 151.813, 281.943 153.268, 281.418 154.770 C 280.647 156.976, 279.760 157.559, 276.797 157.806 C 273.931 158.046, 272.891 157.664, 272.030 156.056 C 271.322 154.733, 269.932 154, 268.131 154 C 266.593 154, 265.070 154.263, 264.748 154.585 C 264.427 154.907, 264.623 156.489, 265.185 158.101 C 265.747 159.712, 267.160 161.699, 268.326 162.516 C 269.660 163.450, 272.799 164, 276.799 164 C 282.489 164, 283.459 163.694, 286.077 161.077 C 289 158.154, 289 158.154, 289 141.577 C 289 125, 289 125, 286 125 C 283.951 125, 283 125.494, 283 126.557 C 283 127.966, 282.789 127.966, 280.777 126.557 C 279.555 125.701, 276.655 125, 274.333 125 C 271.317 125, 269.314 125.686, 267.318 127.403 M 294.923 127.923 C 292.143 130.703, 292 131.269, 292 139.500 C 292 147.646, 292.164 148.318, 294.802 150.956 C 296.467 152.621, 299.213 154.029, 301.573 154.428 C 303.965 154.832, 307.123 154.582, 309.521 153.799 C 312.428 152.850, 313.973 151.557, 315.254 149 C 317.008 145.500, 317.008 145.500, 313.333 145.179 C 310.782 144.957, 309.390 145.339, 308.780 146.429 C 308.248 147.379, 306.550 148, 304.485 148 C 302.133 148, 300.748 147.398, 300.035 146.066 C 299.466 145.002, 299 143.652, 299 143.066 C 299 142.390, 302.297 142, 308 142 C 317 142, 317 142, 317 138.468 C 317 136.525, 316.373 133.434, 315.606 131.599 C 314.839 129.763, 313.164 127.528, 311.883 126.631 C 310.374 125.574, 307.495 125, 303.701 125 C 298.563 125, 297.488 125.358, 294.923 127.923 M 245.200 132.200 C 244.540 132.860, 244 135.994, 244 139.165 C 244 144.019, 244.336 145.109, 246.125 146.067 C 247.853 146.992, 248.740 146.839, 250.875 145.252 C 252.828 143.800, 253.578 142.252, 253.805 139.205 C 254.034 136.130, 253.598 134.598, 252.055 133.055 C 250.925 131.925, 249.190 131, 248.200 131 C 247.210 131, 245.860 131.540, 245.200 132.200 M 273.113 131.909 C 272.351 132.392, 271.511 135.033, 271.247 137.777 C 270.849 141.918, 271.128 143.128, 272.884 144.884 C 274.048 146.048, 275.389 147, 275.865 147 C 276.341 147, 277.916 146.067, 279.365 144.927 C 281.372 143.349, 282 141.964, 282 139.116 C 282 136.736, 281.259 134.582, 279.961 133.189 C 278.840 131.985, 277.152 131.007, 276.211 131.015 C 275.270 131.024, 273.876 131.426, 273.113 131.909 M 300.035 132.934 C 299.466 133.998, 299 135.123, 299 135.434 C 299 135.745, 301.461 136, 304.469 136 C 309.256 136, 309.857 135.782, 309.292 134.250 C 308.936 133.287, 308.163 132.169, 307.573 131.765 C 306.983 131.361, 305.278 131.024, 303.785 131.015 C 302.113 131.006, 300.673 131.743, 300.035 132.934" stroke="none" fill="#f4941c" fill-rule="evenodd"/></svg>
                        </div>
                    </a>
                    <!-- / Logo-->

                    <!-- Navbar Icons-->
                    <ul class="list-unstyled mb-0 d-flex align-items-center order-1 order-lg-2 nav-sidelinks">

                        <!-- Mobile Nav Toggler-->
                        <li class="d-lg-none">
                            <span class="nav-link text-body d-flex align-items-center cursor-pointer" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><i class="ri-menu-line ri-lg me-1"></i> Menu</span>
                        </li>
                        <!-- /Mobile Nav Toggler-->

                        <!-- Navbar Login-->
                        <li class="ms-1 d-none d-lg-inline-block">
                            <a class="nav-link text-body" href="./login">
                                Mon compte
                            </a>
                        </li>
                        <!-- /Navbar Login-->

                        <!-- Navbar Cart Icon-->
                        <li class="ms-1 d-inline-block position-relative dropdown-cart">
                            <button class="nav-link me-0 disable-child-pointer border-0 p-0 bg-transparent text-body" type="button">
                                Panier
                            </button>
                            <div class="cart-dropdown dropdown-menu">

                                <!-- Cart Header-->
                                <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-4">
                                    <h6 class="fw-bolder m-0">Dans le panier (2 produits)</h6>
                                    <i class="ri-close-circle-line text-muted ri-lg cursor-pointer btn-close-cart"></i>
                                </div>
                                <!-- / Cart Header-->

                                <!-- Cart Items-->
                                <div>
                                @foreach(Cart::content() as $item)
                            <div class="table-responsive">
                               
                                <table class="table align-middle">
                                   
                                    <tbody class="border-0">
                                      
                                            <!-- Cart Item-->
                                            <div class="row mx-0 py-4 g-0 border-bottom">
                                                <div class="col-2 position-relative">
                                                    <picture class="d-block border">
                                                        <a href="#">
                                                            <img class="img-fluid" src="{{asset('faker/').'/'. $item->name }}" alt="Image du produit">
                                                        </a>
                                                    </picture>
                                                </div>
                                                <div class="col-9 offset-1">
                                                    <div>
                                                        <h6 class="justify-content-between d-flex align-items-start mb-2">
                                                            {{ $item->name }}
                                                            
                                                            <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                                                                @csrf
                                                               
                                                                <button type="submit">X</button>
                                                            </form>
                                                        </h6>
                                                        <span class="d-block text-muted fw-bolder text-uppercase fs-9">{{ $item->qty }}</span>
                                                    </div>
                                                    <p class="fw-bolder text-end text-muted m-0">{{$item->price}}</p>
                                                    <p class="fw-bolder text-end text-muted m-0">{{$item->image}}</p>
                                                </div>
                                            </div>     
                                            <!-- / Cart Item-->
                                        
                                            
                                    </tbody>
                                    
                                </table>
                            </div>   
                            @endforeach
                                 </div>
                                <!-- Cart Summary-->
                                <div>
                                    <div class="pt-3">
                                        <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-start mb-4 mb-md-2">
                                            <div>
                                                <p class="m-0 fw-bold fs-5">Total</p>
                                                <span class="text-muted small">Frais de transaction de  {{Cart::tax()}} Ξ ETH</span>
                                            </div>
                                            <p class="m-0 fs-5 fw-bold">{{Cart::subtotal()}}Ξ ETH</p>
                                        </div>
                                    </div>
                                    <a href="./cart" class="btn btn-outline-dark w-100 text-center mt-4" role="button">Consulter le panier</a>
                                    <a href="./checkout" class="btn btn-dark w-100 text-center mt-2" role="button">Passer la commande </a>
                                </div>
                                <!-- / Cart Summary-->
                            </div>


                        </li>
                        <!-- /Navbar Cart Icon-->

                    </ul>
                    <!-- Navbar Icons-->

                    <!-- Main Navigation-->
                    <div class="flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1 order-2 order-lg-1" id="navbarNavDropdown">

                        <!-- Menu-->
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown dropdown position-static">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Poulet
                                </a>
                                <!-- Menswear dropdown menu-->
                                <div class="dropdown-menu dropdown-megamenu">
                                    <div class="container-fluid">
                                        <div class="row g-0 g-lg-3">
                                            <!-- Menswear Dropdown Menu Links Section-->
                                            <div class="col col-lg-8 py-lg-5">
                                                <div class="row py-3 py-lg-0 flex-wrap gx-4 gy-6">
                                                    <!-- menu row-->
                                                    <div class="col">
                                                        <h6 class="dropdown-heading">Chicken of the World</h6>
                                                        <ul class="list-unstyled">
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Poule de Soie</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Plymouth</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Brahma</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item" href="./category">Cemani</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category">View All</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- / menu row-->

                                                    <!-- menu row-->
                                                    <div class="col">
                                                        <h6 class="dropdown-heading text-danger">Special Offers</h6>
                                                        <ul class="list-unstyled">
                                                            <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Insulated Jackets</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Bodywarmers</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Parkas</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Baselayers & Thermals</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Winter Hats</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Scarves & Neck</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Gloves & Mitts</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.html">Accessories</a></li>
                                                            <li class="dropdown-list-item"><a class="dropdown-item text-danger dropdown-link-all" href="./category">View All</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- / menu row-->
                                                </div>

                                                <div class="align-items-center justify-content-between mt-5 d-none d-lg-flex">
                                                    <div class="me-5 f-w-20">
                                                        <a class="d-block" href="./category">
                                                            <picture>           
                                                                <img class="img-fluid d-table mx-auto" src="{{asset('logos/logo-1.svg')}}" alt="">
                                                            </picture>
                                                        </a>
                                                    </div>
                                                    <div class="me-5 f-w-20">
                                                        <a class="d-block" href="./category">
                                                            <picture>
                                                                <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-2.svg')}}" alt="">
                                                            </picture>
                                                        </a>
                                                    </div>
                                                    <div class="me-5 f-w-20">
                                                        <a class="d-block" href="./category">
                                                            <picture>
                                                                <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-3.svg')}}" alt="">
                                                            </picture>
                                                        </a>
                                                    </div>
                                                    <div class="me-5 f-w-20">
                                                        <a class="d-block" href="./category">
                                                            <picture>
                                                                <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-4.svg')}}" alt="">
                                                            </picture>
                                                        </a>
                                                    </div>
                                                    <div class="me-5 f-w-20">
                                                        <a class="d-block" href="./category">
                                                            <picture>
                                                                <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-5.svg')}}" alt="">
                                                            </picture>
                                                        </a>
                                                    </div>
                                                    <div class="me-5 f-w-20">
                                                        <a class="d-block" href="./category">
                                                            <picture>
                                                                <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-6.svg')}}" alt="">
                                                            </picture>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Menswear Dropdown Menu Links Section-->

                                            <!-- Menswear Dropdown Menu Images Section-->
                                            <div class="col-lg-4 d-none d-lg-block">
                                                <div class="vw-50 border-start h-100 position-absolute"></div>
                                                <div class="py-lg-5 position-relative z-index-10 px-lg-4">
                                                    <div class="row g-4">
                                                        <div class="col-12 col-md-6">
                                                            <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                                <picture class="w-100 d-block mb-2 mx-auto">
                                                                    <img class="w-100 rounded" title="" src="{{asset('images/banners/Chicken/banner-1.jpeg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                                </picture>
                                                                <a class="fw-bolder link-cover" href="./category">Nos nuggets phares</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                                <picture class="w-100 d-block mb-2 mx-auto">
                                                                    <img class="w-100 rounded" title="" src="{{asset('images/banners/Chicken/banner-5.jpeg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                                </picture>
                                                                <a class="fw-bolder link-cover" href="./category">Nos poules pondeuses</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                                <picture class="w-100 d-block mb-2 mx-auto">
                                                                    <img class="w-100 rounded" title="" src="{{asset('images/banners/Chicken/banner-6.jpeg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                                </picture>
                                                                <a class="fw-bolder link-cover" href="./category">Notre sélection</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                                <picture class="w-100 d-block mb-2 mx-auto">
                                                                    <img class="w-100 rounded" title="" src="{{asset('images/banners/Chicken/banner-7.jpeg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                                                </picture>
                                                                <a class="fw-bolder link-cover" href="./category">Entretenir votre nugget</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="./category" class="btn btn-link p-0 fw-bolder text-link-border mt-5 text-dark mx-auto d-table">Consulter nos recommandations</a>
                                                </div>
                                            </div>
                                            <!-- Menswear Dropdown Menu Images Section-->
                                        </div>
                                    </div>
                                </div>
                                <!-- / Menswear dropdown menu-->
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Coq
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./category">Chabo</a></li>
                                    <li><a class="dropdown-item" href="./category">Sabelpoot</a></li>
                                    <li><a class="dropdown-item" href="./category">Padoue</a></li>
                                    <li><a class="dropdown-item" href="./category">Brahma</a></li>
                                    <li><a class="dropdown-item" href="./category">Crèvecoeur</a></li>
                                    <li><a class="dropdown-item" href="./category">Hollandais huppé</a></li>
                                    <li><a class="dropdown-item" href="./category">Gauloise</a></li>
                                    <li><a class="dropdown-item" href="./category">Susex</a></li>
                                    <li><a class="dropdown-item" href="./category">Coquins</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="./category" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Poussin
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./category">Tamago</a></li>
                                    <li><a class="dropdown-item" href="./category">Ameraucana</a></li>
                                    <li><a class="dropdown-item" href="./category">Barnevelder</a></li>
                                    <li><a class="dropdown-item" href="./category">Ancona</a></li>
                                    <li><a class="dropdown-item" href="./category">Buttercup</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./category" role="button">
                                    Promotions
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Secours
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./index">Homepage</a></li>
                                    <li><a class="dropdown-item" href="./category">Category</a></li>
                                    <li><a class="dropdown-item" href="./product">Product</a></li>
                                    <li><a class="dropdown-item" href="./cart">Cart</a></li>
                                    <li><a class="dropdown-item" href="./checkout">Checkout</a></li>
                                    <li><a class="dropdown-item" href="./login">Login</a></li>
                                    <li><a class="dropdown-item" href="./register">Register</a></li>
                                    <li><a class="dropdown-item" href="./forgotten-password">Forgotten Password</a></li>
                                </ul>
                            </li>
                        </ul> <!-- / Menu-->

                    </div>
                    <!-- / Main Navigation-->

                </div>
            </div>
        </div>
    </nav>
    <!-- / Navbar-->
    <!-- / Navbar-->

    <!-- Main Section-->
    <section class="mt-0 overflow-hidden ">
        <!-- Page Content Goes Here -->

        <!-- / Top banner -->
        <section class="vh-75 vh-lg-60 container-fluid rounded overflow-hidden" data-aos="fade-in">
            <!-- Swiper Info -->
            <div class="swiper-container overflow-hidden rounded h-100 bg-light" data-swiper data-options='{
              "spaceBetween": 0,
              "slidesPerView": 1,
              "effect": "fade",
              "speed": 1000,
              "loop": true,
              "parallax": true,
              "observer": true,
              "observeParents": true,
              "lazy": {
                "loadPrevNext": true
                },
                "autoplay": {
                  "delay": 5000,
                  "disableOnInteraction": false
              },
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
                }
              }'>
                <div class="swiper-wrapper">

                    <!-- Slide-->
                    <div class="swiper-slide position-relative h-100 w-100">
                        <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                            <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100" style=" will-change: transform; background-image: url({{asset('images/banners/Chicken/banner-1.jpeg')}})">
                            </div>
                        </div>
                        <div class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                            <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">Nos promotions</p>
                            <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                                <span class="text-outline-light">Summer Chicken</span> Collection
                            </h2>
                            <div data-swiper-parallax-y="-25">
                                <a href="./category" class="btn btn-psuedo text-white" role="button">Consulter la collection</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Slide-->

                    <!-- Slide-->
                    <div class="swiper-slide position-relative h-100 w-100">
                        <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                            <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100" style=" will-change: transform; background-image: url({{asset('images/banners/Chicken/banner-2.jpeg')}})">
                            </div>
                        </div>
                        <div class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                            <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">Les plus populaires</p>
                            <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                                Adopter votre nugget</h2>
                            <div data-swiper-parallax-y="-25">
                                <a href="./category" class="btn btn-psuedo text-white" role="button">J'adopte !</a>
                            </div>
                        </div>
                    </div>
                    <!--/Slide-->

                    <!-- Slide-->
                    <div class="swiper-slide position-relative h-100 w-100">
                        <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                            <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100" style=" will-change: transform; background-image: url({{asset('images/banners/Chicken/banner-3.jpeg')}})">
                            </div>
                        </div>
                        <div class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                            <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">Notre sélection</p>
                            <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                                Vos nuggets préférés</h2>
                            <div data-swiper-parallax-y="-25">
                                <a href="./category" class="btn btn-psuedo text-white" role="button">Consulter</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Slide-->

                    <!--Slide-->
                    <div class="swiper-slide position-relative h-100 w-100">
                        <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                            <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100" style=" will-change: transform; background-image: url({{asset('images/banners/Chicken/banner-4.jpeg')}})">
                            </div>
                        </div>
                        <div class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                            <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">En apprendre davantage</p>
                            <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                                <span class="text-outline-light">Nos articles</span> Nugget
                            </h2>
                            <div data-swiper-parallax-y="-25">
                                <a href="./category.html" class="btn btn-psuedo text-white" role="button">Lire nos articles</a>
                            </div>
                        </div>
                    </div>
                    <!--/Slide-->

                </div>

                <div class="swiper-pagination swiper-pagination-bullet-light"></div>

            </div>
            <!-- / Swiper Info-->
        </section>
        <!--/ Top Banner-->

        <!-- Featured Brands-->
        <div class="brand-section container-fluid" data-aos="fade-in">
            <div class="bg-overlay-sides-white-to-transparent bg-white py-5 py-md-7">
                <h2 class="mb-5" style="text-align:center;">Nos partenaires exclusifs</h2>
                <section class="marquee marquee-hover-pause">
                    <div class="marquee-body">
                        <div class="marquee-section animation-marquee-50">
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-1.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-2.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-3.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-4.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-5.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-6.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-7.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-8.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-9.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="marquee-section animation-marquee-50">
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-1.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-2.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-3.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-4.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-5.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-6.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-7.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-8.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="./category.html">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{asset('images/logos/logo-9.svg')}}" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!--/ Featured Brands-->

        <div class="container-fluid">
            <!-- Homepage Intro-->
            <div class="position-relative row my-lg-7 pt-5 pt-lg-0 g-8">
                <div class="bg-text bottom-0 start-0 end-0" data-aos="fade-up">
                    <h2 class="bg-text-title opacity-10"><span class="text-outline-dark">Wid</span>Zards</h2>
                </div>
                <div class="col-12 col-md-6 position-relative z-index-20 mb-7 mb-lg-0" data-aos="fade-right">
                    <p class="text-muted title-small">Welcome</p>
                    <h3 class="display-3 fw-bold mb-5"><span class="text-outline-dark">Wiwards Tech & ChickenCo </span> - Chicken & Sacrilegious dev specialists</h3>
                    <p class="lead">We are Wizards, a leading supplier of global high quality Chicken, including names such as <a href="./category">Poule de Soie</a>, <a href="./category">Chabo</a>, <a href="./category">Tamago</a>, and many more.</p>
                    <p class="lead">With worldwide shipping and unbeatable prices - now's a great time to pick out something from our range.</p>
                    <a href="./category" class="btn btn-psuedo" role="button">Shop New Arrivals</a>
                </div>
                <div class="col-12 col-md-6 position-relative z-index-20 pe-0" data-aos="fade-left">
                    <picture class="w-50 d-block position-relative z-index-10 border border-white border-4 shadow-lg">
                        <img class="img-fluid" src="{{asset('images/logos/Gael.jpeg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                    <picture class="w-60 d-block me-8 mt-n10 shadow-lg border border-white border-4 position-relative z-index-20 ms-auto">
                        <img class="img-fluid" src="{{asset('images/logos/wizardds.jpeg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                    <picture class="w-50 d-block me-8 mt-n7 shadow-lg border border-white border-4 position-absolute top-0 end-0 z-index-0 ">
                        <img class="img-fluid" src="{{asset('images/logos/Gael.jpeg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                </div>
            </div>
            <!-- / Homepage Intro-->

            <!-- Homepage Banners-->
            <div class="pt-7 mb-5 mb-lg-10">
                <div class="row g-4">
                    <div class="col-12 col-xl-6 position-relative" data-aos="fade-right">
                        <picture class="position-relative z-index-10">
                            <img class="w-100 rounded" src="{{asset('images/banners/banner-sale.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                        </picture>
                        <div class="position-absolute top-0 bottom-0 start-0 end-0 d-flex justify-content-center align-items-center z-index-20">
                            <div class="py-6 px-5 px-lg-10 text-center w-100">
                                <h2 class="display-1 mb-3 fw-bold text-white"><span class="text-outline-light">Flash</span> Sale</h2>
                                <p class="fs-5 fw-light text-white d-none d-md-block">Our yearly flash sale is now on! Grab yourself a bargain from the world's leading streetwear brands.</p>
                                <a href="./category" class="btn btn-psuedo text-white" role="button">Shop All Sale Items</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6" data-aos="fade-left">
                        <div class="row g-4 justify-content-end">
                            <div class="col-12 col-md-6 d-flex">
                                <div class="card position-relative overflow-hidden">
                                    <picture class="position-relative z-index-10 d-block bg-light">
                                        <img class="w-100 rounded" src="{{asset('images/products/Chicken/product-2.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                    <div class="card-overlay">
                                        <p class="lead fw-bolder mb-2">The Jordan Delta 2</p>
                                        <a href="./category" class="btn btn-psuedo text-white py-2" role="button">Shop Kicks</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex">
                                <div class="card position-relative overflow-hidden">
                                    <picture class="position-relative z-index-10 d-block bg-light">
                                        <img class="w-100 rounded" src="{{asset('images/products/Chicken/product-1.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                    <div class="card-overlay">
                                        <p class="lead fw-bolder mb-2">Latest Mens Shirts</p>
                                        <a href="./category" class="btn btn-psuedo text-white py-2" role="button">Shop New</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex">
                                <div class="card position-relative overflow-hidden">
                                    <picture class="position-relative z-index-10 d-block bg-light">
                                        <img class="w-100 rounded" src="{{asset('images/products/Chicken/product-2.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                    <div class="card-overlay">
                                        <p class="lead fw-bolder mb-2">KiiKii Osake Tees</p>
                                        <a href="./category" class="btn btn-psuedo text-white py-2" role="button">Shop T-Shirts</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex">
                                <div class="card position-relative overflow-hidden">
                                    <picture class="position-relative z-index-10 d-block bg-light">
                                        <img class="w-100 rounded" src="{{asset('images/products/Chicken/product-1.jpg')}}" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                    <div class="card-overlay">
                                        <p class="lead fw-bolder mb-2">Multibuy Womens Shirts</p>
                                        <a href="./category" class="btn btn-psuedo text-white py-2" role="button">Shop Sale Items</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Homepage Banners-->
        </div>

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->

    <!-- Footer -->
    <footer class="border-top py-5 mt-4  ">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row">
                <div>
                    <ul class="list-unstyled">
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all" href="#"><i class="ri-instagram-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all" href="#"><i class="ri-facebook-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all" href="#"><i class="ri-twitter-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all" href="#"><i class="ri-snapchat-fill"></i></a></li>
                    </ul>
                </div>
                <div class="d-flex align-items-center justify-content-end flex-column flex-lg-row">
                    <p class="small m-0 text-center text-lg-start">&copy; 2022 DoubleNuggets No Rights Reserved. We used a template by <a
                            href="https://www.pixelrocket.store">Pixel Rocket</a> 🐔💖</p>
                    <ul class="list-unstyled mb-0 ms-lg-4 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-paypal"></i>
                        </li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-mastercard"></i>
                        </li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-american-express"></i>
                        </li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center"><i class="pi pi-sm pi-visa"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> <!-- / Footer-->


    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="{{asset('js/theme.bundle.js')}}"></script>
    <script src="{{asset('js/vendor.bundle.js')}}"></script>
</body>

</html>