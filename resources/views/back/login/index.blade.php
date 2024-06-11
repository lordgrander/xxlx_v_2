<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <style>
        /* Global Variables */
:root {
    --color1: black;
    --color2: #dd2121;
    --color2Hover: #415059;
    --color3: #fff;
}

/* Reset Default Settings */
* {
    box-sizing: border-box;
    margin: 0;
}

body {
    background-color: var(--color1);
    min-height: 100vh;
    font-family: 'Montserrat', sans-serif;

    /* Flex */
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    background-color: var(--color3);
    width: 700px;
    height: 350px;
    border-radius: 20px;
    overflow: hidden;

    /* Flex */
    display: flex;
}

.container__svgs {
    background-color: var(--color2);
    width: 50%;

    /* Flex */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.container__svg1 {
    width: 200px;
    height: 200px;
    margin-bottom: 10px;
}

.container__svg2 {
    width: 170px;
    height: 18px;
}

.container__content {
    width: 50%;
    position: relative;

    /* Flex */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.container__form {
    margin-bottom: 20px;
    
    /* Flex */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.container__inputField {
    background-color: transparent;
    width: 220px;
    padding: 0 0 10px 5px;
    font-size: 15px;
    letter-spacing: 1px;

    /* Border */
    border: none;
    border-bottom: solid 1px var(--color2);
    border-radius: 0;
}

.container__inputField:first-of-type {
    margin-bottom: 35px;
}

.container__inputField:nth-of-type(2) {
    margin-bottom: 40px;
}

.container__inputField:focus-visible {
    border-bottom: solid 2px var(--color2Hover);
    outline: none;
}

.container__sumbitButton {
    background-color: var(--color2);
    color: var(--color3);
    width: 220px;
    padding: 15px 0;
    font-size: 14px;
    cursor: pointer;

    /* Text */
    text-transform: uppercase;
    letter-spacing: 1px;

    /* Border */
    border: none;
    border-radius: 50px;
}

.container__sumbitButton:hover {
    background-color: var(--color2Hover);
}

.container__links {
    /* Position */
    position: absolute;
    left: 50%;
    bottom: 30px;
    transform: translateX(-50%);

    /* Flex */
    display: flex;
    align-items: center;
    justify-content: center;
}

.container__link {
    color: var(--color2);
    font-size: 12px;
    text-decoration: none;
}

.container__link:hover {
    text-decoration: underline;
}

.container__separator {
    background-color: var(--color2);
    width: 1px;
    height: 10px;
    margin: 0 15px;
}
    </style>
</head>
<body>
    <div class='container'>
    <div class='container__svgs'>
        <svg class='container__svg1' version='1.2' baseProfile='tiny-ps' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 430 428' width='430' height='428'>
        <g id='Login Form'>
            <g id='&lt;Group&gt;'>
            <g id='&lt;Group&gt;'>
                <path id='&lt;Path&gt;' style='fill: #e2b771' d='M418.18 289.73C414.38 292.96 410.3 297.06 406.88 300.62C374.48 375.5 299.51 427.96 212.19 427.96C178.37 427.96 146.42 420.08 118.06 406.09C87.46 407.49 79.03 400.19 68.87 392.87C58.24 385.21 31.44 358.42 32.29 344.39C32.67 338.09 31.43 330.89 29.94 324.87C11.18 293.5 0.4 256.88 0.4 217.75C0.4 183.19 8.81 150.57 23.7 121.8C23.22 116.56 22.81 110.33 22.94 105.17C29.72 99.31 36.61 92.74 43.4 85.57C55.89 72.37 66.35 58.94 74.17 46.58C78.08 45.88 83.63 45.26 91.24 45.2C112.24 30.67 136.02 19.83 161.63 13.6C163.53 10.29 172.06 -0.32 203.58 0.22C238.26 0.81 252.69 0.17 265.05 14.16C356.45 37.46 423.99 119.78 423.99 217.75C423.99 218.7 423.96 219.64 423.95 220.59C425.69 224.29 427.64 228.34 429.48 232.11C423.44 247.41 419.35 267.43 418.18 289.73Z' />
            </g>
            <g id='&lt;Group&gt;'>
                <path id='&lt;Path&gt;' style='fill: #f1c97d' d='M423.95 220.59C425.69 224.29 427.64 228.34 429.48 232.11C423.44 247.41 419.35 267.43 418.18 289.73C414.38 292.96 410.3 297.06 406.88 300.62C388.5 343.11 356.4 378.37 316.13 400.94C168.44 349.63 61.78 224.2 52.61 75.37C61.09 65.54 68.36 55.76 74.17 46.58C78.08 45.88 83.63 45.26 91.24 45.2C112.24 30.67 136.02 19.83 161.63 13.6C163.53 10.29 172.06 -0.32 203.58 0.22C238.26 0.81 252.69 0.17 265.05 14.16C356.45 37.46 423.99 119.78 423.99 217.75C423.99 218.7 423.96 219.64 423.95 220.59Z' />
            </g>
            <g id='&lt;Group&gt;'>
                <g id='&lt;Group&gt;'>
                <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #cea263' d='M215.38 25.42C209.74 29.21 147.8 41.69 149.54 16.94C153.52 15.71 157.55 14.59 161.63 13.6C161.95 13.03 162.49 12.24 163.29 11.32C165.1 14.05 171.22 19.92 190.82 20.74C216.45 21.8 221.55 21.27 215.38 25.42Z' />
                </g>
                <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #cea263' d='M229.32 316.02C216.01 342.55 178.61 350.7 145.77 334.23C112.93 317.76 101.62 284.45 114.92 257.92C128.23 231.39 161.11 221.68 193.95 238.15C226.79 254.62 242.63 289.48 229.32 316.02Z' />
                </g>
                <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #cea263' d='M287.97 120.01C283.95 136.21 263.31 144.2 241.87 137.86C220.44 131.53 206.32 113.25 210.35 97.05C214.37 80.85 235.01 72.85 256.44 79.19C277.88 85.53 291.99 103.81 287.97 120.01Z' />
                </g>
                <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #cea263' d='M275.59 140.42C253.03 163.5 217.18 170.61 201.92 156.89C189.51 145.74 193.59 127.68 205.34 107.42C204.76 122.31 218.15 137.78 237.53 143.51C250.6 147.38 265.24 145.87 275.59 140.42Z' />
                </g>
                <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #cea263' d='M379.02 264.21C376.49 279.45 363.48 286.98 349.97 281.01C336.47 275.05 327.57 257.85 330.11 242.6C332.64 227.35 345.65 219.82 359.15 225.79C372.67 231.76 381.56 248.96 379.02 264.21Z' />
                </g>
                <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #cea263' d='M371.22 283.43C357 305.14 334.41 311.84 324.79 298.93C316.97 288.43 319.54 271.43 326.95 252.36C326.59 266.37 335.03 280.94 347.23 286.33C355.47 289.97 364.7 288.55 371.22 283.43Z' />
                </g>
                <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #cea263' d='M370.39 136.09C369.62 141.2 365.31 143.78 360.76 141.85C356.22 139.92 353.16 134.21 353.93 129.1C354.7 123.99 359.02 121.41 363.56 123.34C368.11 125.27 371.17 130.98 370.39 136.09Z' />
                </g>
                <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #cea263' d='M367.88 142.55C363.22 149.88 355.7 152.23 352.43 147.96C349.76 144.49 350.54 138.79 352.92 132.38C352.87 137.07 355.76 141.89 359.87 143.64C362.64 144.82 365.72 144.3 367.88 142.55Z' />
                </g>
                <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #cea263' d='M86.98 106.65C103.82 113.8 108.42 140.92 97.26 167.22C86.1 193.53 63.4 209.06 46.56 201.91C29.72 194.77 25.12 167.65 36.28 141.35C47.44 115.04 70.15 99.51 86.98 106.65Z' />
                </g>
                <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #cea263' d='M32.43 250.06C40.06 246.34 50.97 252.99 56.78 264.93C62.6 276.86 61.12 289.54 53.48 293.27C45.85 296.99 34.94 290.33 29.13 278.4C23.31 266.47 24.79 253.79 32.43 250.06Z' />
                </g>
                <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #cea263' d='M158.81 391.13C161.39 386.98 168.72 386.87 175.2 390.89C181.68 394.91 184.85 401.53 182.28 405.68C179.7 409.82 172.37 409.93 165.89 405.91C159.41 401.89 156.24 395.27 158.81 391.13Z' />
                </g>
                <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #cea263' d='M240.96 374.67C243.11 364.9 257.22 359.71 272.47 363.07C287.72 366.43 298.34 377.07 296.19 386.83C294.04 396.6 279.93 401.79 264.68 398.43C249.43 395.07 238.81 384.43 240.96 374.67Z' />
                </g>
                <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #cea263' d='M251.11 9.55C251.11 13.29 233.65 16.33 212.11 16.33C190.58 16.33 173.12 13.29 173.12 9.55C173.12 5.8 190.58 2.77 212.11 2.77C233.65 2.77 251.11 5.8 251.11 9.55Z' />
                </g>
                <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #cea263' d='M100.13 400.64C95.65 405.43 78.02 396.2 60.74 380.04C43.45 363.88 33.07 346.91 37.54 342.12C42.01 337.34 59.65 346.56 76.94 362.72C94.22 378.88 104.6 395.86 100.13 400.64Z' />
                </g>
                </g>
            </g>
            <g id='&lt;Group&gt;'>
                <g id='&lt;Group&gt;'>
                <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #f9d293' d='M163.2 388.22C166.58 387.45 171.06 388.33 175.2 390.89C179.64 393.64 182.52 397.62 183.07 401.18C183 401.33 182.93 401.47 182.85 401.62C180.56 405.58 174.06 406.11 168.32 402.8C162.58 399.5 159.77 393.61 162.05 389.64C162.36 389.11 162.75 388.63 163.2 388.22Z' />
                </g>
                <g id='&lt;Group&gt;'>
                    <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #f9d293' d='M281.05 124.52C277.86 137.34 260.32 143.32 241.87 137.86C223.42 132.41 211.05 117.59 214.23 104.76C217.42 91.94 234.96 85.96 253.41 91.42C271.86 96.87 284.23 111.69 281.05 124.52Z' />
                    </g>
                    <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #f9d293' d='M374.66 268.45C372.65 280.52 361.6 286.15 349.97 281.01C338.35 275.88 330.55 261.93 332.56 249.86C334.56 237.79 345.62 232.16 357.24 237.3C368.87 242.43 376.67 256.38 374.66 268.45Z' />
                    </g>
                    <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #f9d293' d='M368.95 137.53C368.34 141.58 364.67 143.51 360.76 141.85C356.85 140.19 354.17 135.56 354.79 131.51C355.4 127.47 359.07 125.53 362.98 127.19C366.89 128.85 369.57 133.48 368.95 137.53Z' />
                    </g>
                    <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #f9d293' d='M100.27 121.24C105.08 133.29 104.39 150.42 97.26 167.22C89.62 185.25 76.55 198.21 63.66 202.29C63.08 202.12 62.5 201.93 61.92 201.71C45.93 195.52 40.22 171.73 49.18 148.56C58.13 125.39 78.35 111.61 94.35 117.79C96.51 118.63 98.49 119.8 100.27 121.24Z' />
                    </g>
                    <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #f9d293' d='M41.59 249.86C47.28 251.84 53.07 257.3 56.78 264.93C60.77 273.1 61.33 281.63 58.83 287.39C58.59 287.54 58.35 287.69 58.1 287.82C51.05 291.54 40.97 286.29 35.59 276.09C30.2 265.88 31.54 254.6 38.58 250.88C39.53 250.37 40.54 250.04 41.59 249.86Z' />
                    </g>
                    <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #f9d293' d='M247.46 366.07C253.45 362.28 262.72 360.93 272.47 363.07C282.92 365.37 291.19 371.1 294.68 377.61C294.64 377.94 294.6 378.27 294.54 378.6C292.82 387.82 280.61 393.27 267.26 390.78C253.92 388.29 244.49 378.8 246.2 369.59C246.44 368.35 246.87 367.17 247.46 366.07Z' />
                    </g>
                    <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #f9d293' d='M226.06 305.68C214.67 328.37 181.96 334.99 152.99 320.46C124.01 305.93 113.73 277.13 125.12 254.44C136.49 231.75 165.23 223.75 194.2 238.28C223.18 252.81 237.44 282.99 226.06 305.68Z' />
                    </g>
                    <g id='&lt;Group&gt;'>
                    <path id='&lt;Path&gt;' style='fill: #f9d293' d='M243.76 13.5C236.68 15.21 225.15 16.33 212.11 16.33C199.87 16.33 188.95 15.34 181.81 13.81C188.56 11.37 200.11 9.76 213.23 9.76C225.79 9.76 236.9 11.24 243.76 13.5Z' />
                    </g>
                </g>
                </g>
            </g>
            </g>
        </g>
        </svg>
        <svg class='container__svg2' version='1.2' baseProfile='tiny-ps' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 348 18' width='348' height='18'>
        <g id='Login Form'>
            <path id='&lt;Path&gt;' style='fill: #3c484b' d='M347.62 9.42C347.62 14.2 269.86 18.08 173.94 18.08C78.02 18.08 0.25 14.2 0.25 9.42C0.25 4.63 78.02 0.75 173.94 0.75C269.86 0.75 347.62 4.63 347.62 9.42Z' />
        </g>
        </svg>

    </div>
    <div class='container__content'>
        <form class='container__form needs-validation' id="needs-validation">
        <input type='text' id='name' placeholder='Username' class='container__inputField' autocomplete="OFF">
        <input type='password' id='password' placeholder='Password' class='container__inputField'>
        <input type='submit' value='Login' class='container__sumbitButton'>
        </form> 
    </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        
<script>
    $(document).ready(function() {
        $('#lineLoginBtn').click(function(event) {
            window.location.href = '/login/line';
        });
        $('form.needs-validation').submit(function(event) {
            event.preventDefault();

            // Get the form data
            var formData = {
                name: $('#name').val(),
                password: $('#password').val()
            };
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Send an AJAX request
            $.ajax({
                type: 'POST',
                url: '{{ route('admin.login.start') }}',
                data: formData,
                dataType: 'json', 
                success: function(response) {
                    if (response.success) {
                        // alert('Login successful!');
                        window.location.href="{{ route('admin.index') }}";
                    } else {
                         alert('Login failed. ');
                    }
                },
                error: function(error) {
                    console.log(error); 
                }
            });
        });
    }); 
</script>
</html>