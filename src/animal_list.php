<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>ASSAD Zoo - Animals Listing</title>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13ec6d",
                        "primary-dark": "#0fb854",
                        "background-dark": "#102218", 
                        "surface-dark": "#1A2820",
                        "forest": {
                            50: '#EBF7F1',
                            100: '#D6EFE3',
                            200: '#AEE0C7',
                            300: '#85D0AA',
                            400: '#5DB18E',
                            500: '#3D8C6D',
                            600: '#2E6952',
                            700: '#23503E',
                            800: '#1A2820',
                            900: '#102218',
                            950: '#08110C',
                        },
                        "sand": {
                            50: '#FBF9F6',
                            100: '#F5EFE6',
                            200: '#EBDCC6',
                            300: '#D6C0A0',
                        }
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"],
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-background-dark text-sand-50 font-display antialiased selection:bg-primary selection:text-background-dark">
<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
<header class="sticky top-0 z-50 bg-background-dark/95 backdrop-blur-md border-b border-forest-800">
<div class="px-4 md:px-10 py-4 flex items-center justify-between max-w-[1440px] mx-auto w-full">
<div class="flex items-center gap-3 text-white cursor-pointer">
<div class="flex items-center justify-center size-10 rounded-full bg-surface-dark border border-forest-700 text-primary shadow-[0_0_15px_rgba(19,236,109,0.2)]">
<span class="material-symbols-outlined text-2xl">pets</span>
</div>
<h2 class="text-xl font-bold leading-tight tracking-tight text-white">ASSAD</h2>
</div>
<div class="hidden lg:flex flex-1 justify-center">
<nav class="flex items-center gap-8 bg-surface-dark/50 px-6 py-2 rounded-full border border-forest-800">
<a class="text-sand-100/80 hover:text-primary transition-colors text-sm font-medium" href="#">Home</a>
<a class="text-primary text-sm font-bold" href="#">Animals</a>
<a class="text-sand-100/80 hover:text-primary transition-colors text-sm font-medium" href="#">Virtual Tours</a>
<a class="text-sand-100/80 hover:text-primary transition-colors text-sm font-medium" href="#">Education</a>
<a class="text-sand-100/80 hover:text-primary transition-colors text-sm font-medium" href="#">Shop</a>
</nav>
</div>
<div class="hidden lg:flex items-center gap-4">
<button class="flex items-center justify-center rounded-full h-10 px-5 bg-primary text-background-dark text-sm font-bold hover:bg-white hover:text-background-dark transition-all shadow-md shadow-primary/20">
                    Book Tour
                </button>
</div>
<div class="lg:hidden text-white">
<span class="material-symbols-outlined text-3xl cursor-pointer">menu</span>
</div>
</div>
</header>
<main class="flex-grow flex flex-col items-center w-full">
<div class="w-full bg-background-dark">
<div class="max-w-[1440px] mx-auto px-4 md:px-10 py-6 md:py-10">
<div class="relative overflow-hidden rounded-3xl min-h-[400px] md:min-h-[480px] flex flex-col justify-end items-start p-8 md:p-12 bg-cover bg-center shadow-2xl border border-forest-800 group" style='background-image: linear-gradient(180deg, rgba(16,34,24,0) 0%, rgba(16,34,24,0.6) 50%, rgba(16,34,24,0.95) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuASsI6noNlFSU-rA4IHh-XOh3_Ve8rbOgEF3VY70DwcX9QlIGZox2Iw6YyF5NdmMkRszgeUrD4EEjQuFdRSJMiD0P279Ho6RkHesetgqdZZE_nBLXjUAOpTgDrS_nLWjyb7uvKnHwdgkRBpAZfK0JJYtLPZZY8vzukfylKlECT5kL_Ff7HlVeHl8FOBWBjUdnclusFbK6SmhS9GMnlnalU-NO2eWUCqzIQENhAEIxRhaeAohb-1UkfMmQHhuvI-bOQRSQWcHL-NOJ2s");'>
<div class="relative z-10 flex flex-col gap-4 max-w-3xl">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/20 border border-primary/30 backdrop-blur-sm w-fit">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
<span class="text-primary text-xs font-bold uppercase tracking-wider">Live Exhibits</span>
</div>
<h1 class="text-white text-4xl md:text-5xl lg:text-7xl font-black leading-tight tracking-tight drop-shadow-lg">
                            Kingdom of the <span class="text-primary">Atlas</span>
</h1>
<p class="text-sand-100 text-base md:text-lg font-medium leading-relaxed max-w-2xl drop-shadow-md opacity-90">
                            Discover the vibrant wildlife of Africa, from the legendary Atlas Lion to the hidden wonders of the deep jungle.
                        </p>
</div>
</div>
<div class="w-full relative -mt-8 z-20 px-2 md:px-0">
<div class="bg-surface-dark border border-forest-700 rounded-2xl shadow-xl p-4 md:p-6 flex flex-col gap-6">
<div class="w-full">
<label class="flex flex-col h-14 w-full group">
<div class="flex w-full flex-1 items-stretch rounded-xl h-full bg-background-dark border border-forest-700 focus-within:border-primary transition-colors overflow-hidden">
<div class="text-forest-400 group-focus-within:text-primary flex items-center justify-center pl-4 pr-2 transition-colors">
<span class="material-symbols-outlined text-2xl">search</span>
</div>
<input class="flex w-full flex-1 resize-none bg-transparent border-none focus:ring-0 text-white placeholder:text-forest-400 px-2 text-base font-normal leading-normal h-full" placeholder="Find your favorite animal..." value=""/>
</div>
</label>
</div>
<div class="flex flex-col lg:flex-row gap-6 justify-between items-start lg:items-center border-t border-forest-800 pt-6">
<div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 w-full lg:w-auto overflow-x-auto pb-2 sm:pb-0 hide-scrollbar">
<span class="text-xs font-bold text-forest-400 uppercase tracking-wider whitespace-nowrap">Habitat:</span>
<div class="flex gap-2">
<button class="flex h-9 items-center justify-center gap-x-2 rounded-full bg-primary px-4 transition-transform hover:scale-105 active:scale-95">
<p class="text-background-dark text-sm font-bold whitespace-nowrap">All Habitats</p>
</button>
<button class="flex h-9 items-center justify-center gap-x-2 rounded-full bg-background-dark border border-forest-700 px-4 hover:bg-forest-800 hover:border-primary/50 transition-colors">
<p class="text-sand-200 text-sm font-medium whitespace-nowrap">Savannah</p>
</button>
<button class="flex h-9 items-center justify-center gap-x-2 rounded-full bg-background-dark border border-forest-700 px-4 hover:bg-forest-800 hover:border-primary/50 transition-colors">
<p class="text-sand-200 text-sm font-medium whitespace-nowrap">Rainforest</p>
</button>
<button class="flex h-9 items-center justify-center gap-x-2 rounded-full bg-background-dark border border-forest-700 px-4 hover:bg-forest-800 hover:border-primary/50 transition-colors">
<p class="text-sand-200 text-sm font-medium whitespace-nowrap">Desert</p>
</button>
</div>
</div>
<div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 w-full lg:w-auto overflow-x-auto pb-2 sm:pb-0 hide-scrollbar">
<span class="text-xs font-bold text-forest-400 uppercase tracking-wider whitespace-nowrap">Region:</span>
<div class="flex gap-2">
<button class="flex h-8 items-center justify-center gap-x-2 rounded-lg bg-white/5 border border-white/10 px-3 hover:bg-white/10 transition-colors text-primary">
<p class="text-sm font-medium whitespace-nowrap">All Regions</p>
</button>
<button class="flex h-8 items-center justify-center gap-x-2 rounded-lg bg-transparent px-3 hover:bg-forest-800 transition-colors text-forest-300 hover:text-white">
<p class="text-sm font-medium whitespace-nowrap">North Africa</p>
</button>
<button class="flex h-8 items-center justify-center gap-x-2 rounded-lg bg-transparent px-3 hover:bg-forest-800 transition-colors text-forest-300 hover:text-white">
<p class="text-sm font-medium whitespace-nowrap">Sub-Saharan</p>
</button>
</div>
</div>
</div>
</div>
</div>
<div class="w-full py-12 pb-20">
<div class="flex justify-between items-end mb-8 border-b border-forest-800 pb-4">
<div>
<h3 class="text-2xl font-bold text-white mb-1">Featured Wildlife</h3>
<p class="text-forest-400 text-sm">Explore our diverse collection of African species.</p>
</div>
<span class="text-sm text-primary font-bold bg-primary/10 px-3 py-1 rounded-full border border-primary/20">8 of 42</span>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
<div class="flex flex-col overflow-hidden rounded-2xl bg-surface-dark shadow-lg border border-forest-800 hover:border-primary/50 hover:shadow-[0_0_20px_rgba(19,236,109,0.15)] hover:-translate-y-1 transition-all duration-300 group">
<div class="relative h-64 w-full overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="inline-flex items-center rounded-md bg-red-950/80 backdrop-blur-sm px-2.5 py-1 text-xs font-bold text-red-200 border border-red-800/50 shadow-sm">Extinct in Wild</span>
</div>
<div class="h-full w-full bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDsKA_8kfgE54UiGZPxhKGLw4qImEfQN583cXrt_cbjmTU8ohh1S4LHts5mB1PoTDWZpcWz1eEQust3WeTvUbg_8n0ykXGWuk4W5PUg7f6pCRtlMOIup0IcsGqcnpXM1coRItY4SMX1JTZgId_a31o3rPJ-FwCzBp_nn2PnHHcxOsgj4VPNz55dkeFW4HXQtsuu8i_RDS3UYCk-ZPXHhrXAsGmkhFeV2s1icF2sHUjvvTiOkfdamtz8QUhBnL8Vbc_1yvgzvHAsXDfN");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-surface-dark via-transparent to-transparent opacity-80"></div>
</div>
<div class="flex flex-1 flex-col p-5 -mt-12 relative z-10">
<div class="flex justify-between items-start mb-2">
<div>
<h3 class="text-xl font-bold text-white group-hover:text-primary transition-colors">Atlas Lion</h3>
<p class="text-xs font-medium text-forest-400 uppercase tracking-wide">Panthera leo leo</p>
</div>
<div class="size-9 rounded-full bg-background-dark flex items-center justify-center text-primary border border-forest-700 shadow-sm group-hover:bg-primary group-hover:text-background-dark transition-colors" title="Carnivore">
<span class="material-symbols-outlined text-[20px]">restaurant</span>
</div>
</div>
<div class="mt-2 flex items-center gap-2 text-sm text-sand-200/80 mb-6">
<span class="material-symbols-outlined text-primary text-[18px]">location_on</span>
<span>Atlas Mountains</span>
</div>
<div class="mt-auto">
<button class="w-full rounded-xl bg-forest-800 border border-forest-700/50 py-3 text-sm font-bold text-white hover:bg-primary hover:text-background-dark hover:border-transparent transition-all flex items-center justify-center gap-2 group/btn">
<span>Visit Enclosure</span>
<span class="material-symbols-outlined text-[18px] group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</button>
</div>
</div>
</div>
<div class="flex flex-col overflow-hidden rounded-2xl bg-surface-dark shadow-lg border border-forest-800 hover:border-primary/50 hover:shadow-[0_0_20px_rgba(19,236,109,0.15)] hover:-translate-y-1 transition-all duration-300 group">
<div class="relative h-64 w-full overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="inline-flex items-center rounded-md bg-forest-900/80 backdrop-blur-sm px-2.5 py-1 text-xs font-bold text-primary border border-primary/20 shadow-sm">Least Concern</span>
</div>
<div class="h-full w-full bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuASrZxmElbhwqZZ1ksum8otVwSDfNxz9GRfxjHnufUTkqhjEeJp98g8WTcG96KGuXC1TNVBuAniQ1EN_BDbLb2uTnAOYG1H-Xw2Pc5M6fz1yQDdwlEt1P3S1i3c9Sw2OTQVXn8BmJ19JIXZNhdWX5u79Cw77B3z5vODSTlXLOQj7d7wUXCBDYqvQFGAZik0vhait38NGyXCBIriHrzUDupC5ve0RiUDY63Fftx1FpVp8Jk8hWg3FVTYWNABIJzR2Ne2lhyUkJCZeOlu");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-surface-dark via-transparent to-transparent opacity-80"></div>
</div>
<div class="flex flex-1 flex-col p-5 -mt-12 relative z-10">
<div class="flex justify-between items-start mb-2">
<div>
<h3 class="text-xl font-bold text-white group-hover:text-primary transition-colors">Fennec Fox</h3>
<p class="text-xs font-medium text-forest-400 uppercase tracking-wide">Vulpes zerda</p>
</div>
<div class="size-9 rounded-full bg-background-dark flex items-center justify-center text-primary border border-forest-700 shadow-sm group-hover:bg-primary group-hover:text-background-dark transition-colors" title="Omnivore">
<span class="material-symbols-outlined text-[20px]">grass</span>
</div>
</div>
<div class="mt-2 flex items-center gap-2 text-sm text-sand-200/80 mb-6">
<span class="material-symbols-outlined text-primary text-[18px]">location_on</span>
<span>Sahara Desert</span>
</div>
<div class="mt-auto">
<button class="w-full rounded-xl bg-forest-800 border border-forest-700/50 py-3 text-sm font-bold text-white hover:bg-primary hover:text-background-dark hover:border-transparent transition-all flex items-center justify-center gap-2 group/btn">
<span>Learn More</span>
<span class="material-symbols-outlined text-[18px] group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</button>
</div>
</div>
</div>
<div class="flex flex-col overflow-hidden rounded-2xl bg-surface-dark shadow-lg border border-forest-800 hover:border-primary/50 hover:shadow-[0_0_20px_rgba(19,236,109,0.15)] hover:-translate-y-1 transition-all duration-300 group">
<div class="relative h-64 w-full overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="inline-flex items-center rounded-md bg-orange-900/80 backdrop-blur-sm px-2.5 py-1 text-xs font-bold text-orange-200 border border-orange-700/50 shadow-sm">Endangered</span>
</div>
<div class="h-full w-full bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB-AR4PmaiZQLgwjO5Q3toJB--iu-CZZWxbIHPebM43OvX-_yww8kzPJ59K13Eh190R4OrOuN-aM9nl7qFy-w9eTVKg7xg41HtZOtZrRlqLK2vPhQ07SHM3cuPJL8kcD-VN89EnLbfaT6M1bl7ZsFubKF1OCa0FpexKMEhrJx53ApDOpGesT5HD_YrcoFxVZAo9x1hOMKXg0-byYbpzp2jwHs_dzBvO2wOmx1uGue_MHfQgxPxQW19PuHufwY_UKa7krPQcIlIy72hm");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-surface-dark via-transparent to-transparent opacity-80"></div>
</div>
<div class="flex flex-1 flex-col p-5 -mt-12 relative z-10">
<div class="flex justify-between items-start mb-2">
<div>
<h3 class="text-xl font-bold text-white group-hover:text-primary transition-colors">African Elephant</h3>
<p class="text-xs font-medium text-forest-400 uppercase tracking-wide">Loxodonta africana</p>
</div>
<div class="size-9 rounded-full bg-background-dark flex items-center justify-center text-primary border border-forest-700 shadow-sm group-hover:bg-primary group-hover:text-background-dark transition-colors" title="Herbivore">
<span class="material-symbols-outlined text-[20px]">eco</span>
</div>
</div>
<div class="mt-2 flex items-center gap-2 text-sm text-sand-200/80 mb-6">
<span class="material-symbols-outlined text-primary text-[18px]">location_on</span>
<span>Savannah</span>
</div>
<div class="mt-auto">
<button class="w-full rounded-xl bg-forest-800 border border-forest-700/50 py-3 text-sm font-bold text-white hover:bg-primary hover:text-background-dark hover:border-transparent transition-all flex items-center justify-center gap-2 group/btn">
<span>Learn More</span>
<span class="material-symbols-outlined text-[18px] group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</button>
</div>
</div>
</div>
<div class="flex flex-col overflow-hidden rounded-2xl bg-surface-dark shadow-lg border border-forest-800 hover:border-primary/50 hover:shadow-[0_0_20px_rgba(19,236,109,0.15)] hover:-translate-y-1 transition-all duration-300 group">
<div class="relative h-64 w-full overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="inline-flex items-center rounded-md bg-orange-900/80 backdrop-blur-sm px-2.5 py-1 text-xs font-bold text-orange-200 border border-orange-700/50 shadow-sm">Endangered</span>
</div>
<div class="h-full w-full bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDruVOxolmAnKqHU_ZyhH7sYNAVRPSCfOD53L2MkDGklYjqXk9DbOkpP9SJvs7_81W40OO3tWf8Uyy676D9fpPUD2grZkXC0ELmHKM1zHF_aVgBU9zpU59_xirYymCKQo7_c-6IitV2wD64somdidtApA3Jw6qtsTqvENJYu5vyVCPa4DpED1pFKNH-J1i4L44w1II4arrh7IkH3lTD33V8d0co-ohJrHNnvx4mPzvTJDkVtD0Xo8Exh8yo0q-Y7LG6zocLT4qcCwkH");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-surface-dark via-transparent to-transparent opacity-80"></div>
</div>
<div class="flex flex-1 flex-col p-5 -mt-12 relative z-10">
<div class="flex justify-between items-start mb-2">
<div>
<h3 class="text-xl font-bold text-white group-hover:text-primary transition-colors">Barbary Macaque</h3>
<p class="text-xs font-medium text-forest-400 uppercase tracking-wide">Macaca sylvanus</p>
</div>
<div class="size-9 rounded-full bg-background-dark flex items-center justify-center text-primary border border-forest-700 shadow-sm group-hover:bg-primary group-hover:text-background-dark transition-colors" title="Omnivore">
<span class="material-symbols-outlined text-[20px]">grass</span>
</div>
</div>
<div class="mt-2 flex items-center gap-2 text-sm text-sand-200/80 mb-6">
<span class="material-symbols-outlined text-primary text-[18px]">location_on</span>
<span>Morocco, Algeria</span>
</div>
<div class="mt-auto">
<button class="w-full rounded-xl bg-forest-800 border border-forest-700/50 py-3 text-sm font-bold text-white hover:bg-primary hover:text-background-dark hover:border-transparent transition-all flex items-center justify-center gap-2 group/btn">
<span>Learn More</span>
<span class="material-symbols-outlined text-[18px] group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</button>
</div>
</div>
</div>
<div class="flex flex-col overflow-hidden rounded-2xl bg-surface-dark shadow-lg border border-forest-800 hover:border-primary/50 hover:shadow-[0_0_20px_rgba(19,236,109,0.15)] hover:-translate-y-1 transition-all duration-300 group">
<div class="relative h-64 w-full overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="inline-flex items-center rounded-md bg-yellow-900/80 backdrop-blur-sm px-2.5 py-1 text-xs font-bold text-yellow-200 border border-yellow-700/50 shadow-sm">Vulnerable</span>
</div>
<div class="h-full w-full bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAc-b0wydubAOCSkMCBAKBmbTBMy30oXHFOPgRe0JtumKC-ZmdCwSh3Cj-f_tpAioGFzighUZb0ivMlxBrDBSAGz7v-zQjCBTEptOztCwoZV8TZnSAk9yjKeeG-XHy9M3Wt-ljGEaZ3qO4YVZ95kuZBxxgR6bqtEcLLnY2l-Vnq2u0Tp01sm2dWALhAXmIFYORHN1839jeOeBsNn7halkISxXi7Dwp9qLUJ3FtnD4l3NDa6eIzf1JwW6w3yNvLp0z8uqxGeQG3WrYxu");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-surface-dark via-transparent to-transparent opacity-80"></div>
</div>
<div class="flex flex-1 flex-col p-5 -mt-12 relative z-10">
<div class="flex justify-between items-start mb-2">
<div>
<h3 class="text-xl font-bold text-white group-hover:text-primary transition-colors">Giraffe</h3>
<p class="text-xs font-medium text-forest-400 uppercase tracking-wide">Giraffa camelopardalis</p>
</div>
<div class="size-9 rounded-full bg-background-dark flex items-center justify-center text-primary border border-forest-700 shadow-sm group-hover:bg-primary group-hover:text-background-dark transition-colors" title="Herbivore">
<span class="material-symbols-outlined text-[20px]">eco</span>
</div>
</div>
<div class="mt-2 flex items-center gap-2 text-sm text-sand-200/80 mb-6">
<span class="material-symbols-outlined text-primary text-[18px]">location_on</span>
<span>East Africa</span>
</div>
<div class="mt-auto">
<button class="w-full rounded-xl bg-forest-800 border border-forest-700/50 py-3 text-sm font-bold text-white hover:bg-primary hover:text-background-dark hover:border-transparent transition-all flex items-center justify-center gap-2 group/btn">
<span>Learn More</span>
<span class="material-symbols-outlined text-[18px] group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</button>
</div>
</div>
</div>
<div class="flex flex-col overflow-hidden rounded-2xl bg-surface-dark shadow-lg border border-forest-800 hover:border-primary/50 hover:shadow-[0_0_20px_rgba(19,236,109,0.15)] hover:-translate-y-1 transition-all duration-300 group">
<div class="relative h-64 w-full overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="inline-flex items-center rounded-md bg-forest-900/80 backdrop-blur-sm px-2.5 py-1 text-xs font-bold text-primary border border-primary/20 shadow-sm">Least Concern</span>
</div>
<div class="h-full w-full bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDtnHByVvA_W45S_qVPSLEpcIJn9_M4EX21BoERFgLKJp42HDxBPiyjY6sUpm22kKU0Cle6ChN726lpZ28qUdfxSvIQgmfCJAOjRmkONrTaRrZduQBY96r7yZ-NYChxhMK2vgaTP1hobAYXiBN59uhSODvIxbdvZTuXI5OksJdA1Bc_buREwdunGko-TVLqFRDkbkO-cbodkuFqd095W_PMry-GBdSh39rLXGLJLWiGEP-rGE9BToSG7Bai_NIeg4EOkTFWZ4iuLhXi");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-surface-dark via-transparent to-transparent opacity-80"></div>
</div>
<div class="flex flex-1 flex-col p-5 -mt-12 relative z-10">
<div class="flex justify-between items-start mb-2">
<div>
<h3 class="text-xl font-bold text-white group-hover:text-primary transition-colors">Meerkat</h3>
<p class="text-xs font-medium text-forest-400 uppercase tracking-wide">Suricata suricatta</p>
</div>
<div class="size-9 rounded-full bg-background-dark flex items-center justify-center text-primary border border-forest-700 shadow-sm group-hover:bg-primary group-hover:text-background-dark transition-colors" title="Carnivore">
<span class="material-symbols-outlined text-[20px]">restaurant</span>
</div>
</div>
<div class="mt-2 flex items-center gap-2 text-sm text-sand-200/80 mb-6">
<span class="material-symbols-outlined text-primary text-[18px]">location_on</span>
<span>Kalahari Desert</span>
</div>
<div class="mt-auto">
<button class="w-full rounded-xl bg-forest-800 border border-forest-700/50 py-3 text-sm font-bold text-white hover:bg-primary hover:text-background-dark hover:border-transparent transition-all flex items-center justify-center gap-2 group/btn">
<span>Learn More</span>
<span class="material-symbols-outlined text-[18px] group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</button>
</div>
</div>
</div>
<div class="flex flex-col overflow-hidden rounded-2xl bg-surface-dark shadow-lg border border-forest-800 hover:border-primary/50 hover:shadow-[0_0_20px_rgba(19,236,109,0.15)] hover:-translate-y-1 transition-all duration-300 group">
<div class="relative h-64 w-full overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="inline-flex items-center rounded-md bg-red-950/80 backdrop-blur-sm px-2.5 py-1 text-xs font-bold text-red-200 border border-red-800/50 shadow-sm">Critically Endangered</span>
</div>
<div class="h-full w-full bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCOwmV35MioY11MzmPovEhNUDu7pC-WDeKsMqvuWOfRILQ_sUcuDJHTHfx9PsBDgaDtPOvMshiCd7ek3iSzF1n8ua6DOkddpFlZFFplqtEMuYPl9ZmKANhQfMQnQtWr-nKqYioCRAFmENhbnwHe15OC7a68fAkHugPf8fz5VgdwzyBtPfhf2xJinOiaZ2MvlGpN29Cs8FxFBMNWFlBUIR9z1zD954cLnx8vWn9WzDTGutBtZMrqS4Pozl-j8FsLdkGkqHIQP-kSWwyA");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-surface-dark via-transparent to-transparent opacity-80"></div>
</div>
<div class="flex flex-1 flex-col p-5 -mt-12 relative z-10">
<div class="flex justify-between items-start mb-2">
<div>
<h3 class="text-xl font-bold text-white group-hover:text-primary transition-colors">Western Gorilla</h3>
<p class="text-xs font-medium text-forest-400 uppercase tracking-wide">Gorilla gorilla</p>
</div>
<div class="size-9 rounded-full bg-background-dark flex items-center justify-center text-primary border border-forest-700 shadow-sm group-hover:bg-primary group-hover:text-background-dark transition-colors" title="Herbivore">
<span class="material-symbols-outlined text-[20px]">eco</span>
</div>
</div>
<div class="mt-2 flex items-center gap-2 text-sm text-sand-200/80 mb-6">
<span class="material-symbols-outlined text-primary text-[18px]">location_on</span>
<span>West Africa</span>
</div>
<div class="mt-auto">
<button class="w-full rounded-xl bg-forest-800 border border-forest-700/50 py-3 text-sm font-bold text-white hover:bg-primary hover:text-background-dark hover:border-transparent transition-all flex items-center justify-center gap-2 group/btn">
<span>Learn More</span>
<span class="material-symbols-outlined text-[18px] group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</button>
</div>
</div>
</div>
<div class="flex flex-col overflow-hidden rounded-2xl bg-surface-dark shadow-lg border border-forest-800 hover:border-primary/50 hover:shadow-[0_0_20px_rgba(19,236,109,0.15)] hover:-translate-y-1 transition-all duration-300 group">
<div class="relative h-64 w-full overflow-hidden">
<div class="absolute top-3 left-3 z-10">
<span class="inline-flex items-center rounded-md bg-forest-900/80 backdrop-blur-sm px-2.5 py-1 text-xs font-bold text-primary border border-primary/20 shadow-sm">Least Concern</span>
</div>
<div class="h-full w-full bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBENWS8fbneF9VLi-cRBVvfFzBj7XSBpoXI3fF-1W4UnDwG2BMZRfpZWF0oPPI7Ot0PUKqVHMDopMFdgOOlJiiDCEmitl4NX1pCnbL_ZxrTkkmx4VSEcSWV145K8NInJk0iC2MYe0RI6b8XHuX9xdP-MxYQeEUoJhSVDJOGR1F7XcWJ3jXuUIZqeovjhAhkz_XbnuFm1RgjIRU0J4cCtvD0JwWz1Yxm_KqkRsJ333HOndbpRfvD3XmujwhADcHvWfXEpfQLn8OAcKtg");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-surface-dark via-transparent to-transparent opacity-80"></div>
</div>
<div class="flex flex-1 flex-col p-5 -mt-12 relative z-10">
<div class="flex justify-between items-start mb-2">
<div>
<h3 class="text-xl font-bold text-white group-hover:text-primary transition-colors">Nile Crocodile</h3>
<p class="text-xs font-medium text-forest-400 uppercase tracking-wide">Crocodylus niloticus</p>
</div>
<div class="size-9 rounded-full bg-background-dark flex items-center justify-center text-primary border border-forest-700 shadow-sm group-hover:bg-primary group-hover:text-background-dark transition-colors" title="Carnivore">
<span class="material-symbols-outlined text-[20px]">restaurant</span>
</div>
</div>
<div class="mt-2 flex items-center gap-2 text-sm text-sand-200/80 mb-6">
<span class="material-symbols-outlined text-primary text-[18px]">location_on</span>
<span>Freshwater Habitats</span>
</div>
<div class="mt-auto">
<button class="w-full rounded-xl bg-forest-800 border border-forest-700/50 py-3 text-sm font-bold text-white hover:bg-primary hover:text-background-dark hover:border-transparent transition-all flex items-center justify-center gap-2 group/btn">
<span>Learn More</span>
<span class="material-symbols-outlined text-[18px] group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</button>
</div>
</div>
</div>
</div>
<div class="mt-16 flex items-center justify-center gap-3">
<button class="flex h-10 w-10 items-center justify-center rounded-lg border border-forest-700 bg-surface-dark text-forest-400 hover:bg-forest-800 hover:text-white transition-colors disabled:opacity-50" disabled="">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary text-background-dark font-bold shadow-md shadow-primary/20 hover:bg-white hover:text-background-dark transition-colors">
                            1
                        </button>
<button class="flex h-10 w-10 items-center justify-center rounded-lg border border-forest-700 bg-surface-dark text-sand-100 hover:bg-forest-800 hover:text-white transition-colors font-medium hover:border-primary/50">
                            2
                        </button>
<button class="flex h-10 w-10 items-center justify-center rounded-lg border border-forest-700 bg-surface-dark text-sand-100 hover:bg-forest-800 hover:text-white transition-colors font-medium hover:border-primary/50">
                            3
                        </button>
<span class="flex h-10 w-10 items-center justify-center text-forest-500 font-bold">...</span>
<button class="flex h-10 w-10 items-center justify-center rounded-lg border border-forest-700 bg-surface-dark text-sand-100 hover:bg-forest-800 hover:text-white transition-colors hover:border-primary/50">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
</main>
<footer class="border-t border-forest-800 bg-background-dark pt-16 pb-8">
<div class="max-w-[1440px] mx-auto px-4 md:px-10">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
<div class="flex flex-col gap-6">
<div class="flex items-center gap-3">
<div class="flex items-center justify-center size-9 rounded-full bg-surface-dark border border-forest-700 text-primary">
<span class="material-symbols-outlined text-xl">pets</span>
</div>
<span class="text-2xl font-bold text-white">ASSAD</span>
</div>
<p class="text-forest-300 text-sm leading-relaxed">
                        The ultimate virtual zoo experience, celebrating the majesty of African wildlife and the Atlas Lion legacy.
                    </p>
<div class="flex items-center gap-3 mt-2">
<div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-dark border border-forest-700">
<span class="text-xs font-bold text-white">CAN 2025</span>
<span class="h-2 w-2 rounded-full bg-red-600"></span>
<span class="text-[10px] text-forest-400 uppercase">Official Partner</span>
</div>
</div>
</div>
<div>
<h4 class="font-bold text-white mb-6 text-lg">Discover</h4>
<ul class="flex flex-col gap-4">
<li><a class="text-forest-400 text-sm hover:text-primary transition-colors flex items-center gap-2" href="#"><span class="w-1.5 h-1.5 rounded-full bg-forest-700"></span>Our Animals</a></li>
<li><a class="text-forest-400 text-sm hover:text-primary transition-colors flex items-center gap-2" href="#"><span class="w-1.5 h-1.5 rounded-full bg-forest-700"></span>Virtual Tours</a></li>
<li><a class="text-forest-400 text-sm hover:text-primary transition-colors flex items-center gap-2" href="#"><span class="w-1.5 h-1.5 rounded-full bg-forest-700"></span>Live Cams</a></li>
<li><a class="text-forest-400 text-sm hover:text-primary transition-colors flex items-center gap-2" href="#"><span class="w-1.5 h-1.5 rounded-full bg-forest-700"></span>Interactive Map</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-white mb-6 text-lg">Support</h4>
<ul class="flex flex-col gap-4">
<li><a class="text-forest-400 text-sm hover:text-primary transition-colors flex items-center gap-2" href="#"><span class="w-1.5 h-1.5 rounded-full bg-forest-700"></span>Donate</a></li>
<li><a class="text-forest-400 text-sm hover:text-primary transition-colors flex items-center gap-2" href="#"><span class="w-1.5 h-1.5 rounded-full bg-forest-700"></span>Membership</a></li>
<li><a class="text-forest-400 text-sm hover:text-primary transition-colors flex items-center gap-2" href="#"><span class="w-1.5 h-1.5 rounded-full bg-forest-700"></span>Volunteer</a></li>
<li><a class="text-forest-400 text-sm hover:text-primary transition-colors flex items-center gap-2" href="#"><span class="w-1.5 h-1.5 rounded-full bg-forest-700"></span>Conservation</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-white mb-6 text-lg">Stay Connected</h4>
<div class="flex flex-col gap-4">
<p class="text-forest-400 text-sm">Join our newsletter for updates and wild stories.</p>
<div class="flex gap-2">
<input class="bg-surface-dark border border-forest-700 text-white text-sm rounded-lg px-4 py-2 w-full focus:ring-1 focus:ring-primary focus:border-primary placeholder:text-forest-500" placeholder="Email address" type="email"/>
<button class="bg-primary text-background-dark p-2 rounded-lg hover:bg-white transition-colors">
<span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
<div class="flex gap-4 mt-2">
<a class="text-forest-400 hover:text-primary transition-colors" href="#">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
</a>
<a class="text-forest-400 hover:text-primary transition-colors" href="#">
<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.072 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.85-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
</a>
</div>
</div>
</div>
</div>
<div class="border-t border-forest-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-forest-500 text-sm">© 2023 ASSAD Zoo. All rights reserved.</p>
<div class="flex gap-6">
<a class="text-forest-500 text-sm hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="text-forest-500 text-sm hover:text-primary transition-colors" href="#">Terms of Service</a>
</div>
</div>
</div>
</footer>
</div>

</body></html>