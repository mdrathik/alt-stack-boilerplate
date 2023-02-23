<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>AlpineJS, Laravel & Tailwind</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-green-50 py-6 sm:py-12">
        <div class="relative bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto">
            <div class="mx-auto max-w-4xl">
                <div class="divide-y divide-gray-300/50">
                    <div class="space-y-6 py-8 text-base font-extralight leading-7 text-gray-600">
                        <h1 class="text-7xl font-bold text-gray-800" x-data="animatedHeading" x-bind:style="style"
                            x-init="init()">Alpine Laravel & Tailwind</h1>


                        <p>Boom...........</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script>
    let animatedHeading = {
        style: {
            color: 'red',
        },
        init() {
            setInterval(() => {
                this.style.color = getRandomColor();
            }, 100);
        }
    };

    function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }
</script>

</html>
