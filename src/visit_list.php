<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Visitor: Guided Tours - ASSAD</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;family=Noto+Sans:wght@100..900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13ec6d",
                        "primary-dark": "#0ea84d",
                        "background-dark": "#102218", 
                        "surface-dark": "#1A2820",
                        "surface-dark-hover": "#223328",
                        "accent-gold": "#eab308", 
                        "accent-sand": "#d6cbb6", 
                        "border-color": "#28392a",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "full": "9999px"},
                    backgroundImage: {
                        'pattern-overlay': "url(\"data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%2328392a' fill-opacity='0.08'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E\")",
                    }
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        @layer utilities {
            .no-scrollbar::-webkit-scrollbar {
                display: none;
            }
            .no-scrollbar {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
        }
        body {
            font-family: 'Noto Sans', sans-serif;
            @apply bg-background-dark text-white;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen bg-background-dark selection:bg-primary selection:text-background-dark overflow-x-hidden">
<header class="sticky top-0 z-50 w-full bg-[#102218]/90 backdrop-blur-md border-b border-white/10">
<div class="px-4 md:px-10 lg:px-20 w-full flex justify-center">
<div class="flex items-center justify-between w-full max-w-7xl py-4 h-20">
<div class="flex items-center gap-3">
<div class="size-10 text-primary">
<svg class="w-full h-full" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_6_319)">
<path d="M8.57829 8.57829C5.52816 11.6284 3.451 15.5145 2.60947 19.7452C1.76794 23.9758 2.19984 28.361 3.85056 32.3462C5.50128 36.3314 8.29667 39.7376 11.8832 42.134C15.4698 44.5305 19.6865 45.8096 24 45.8096C28.3135 45.8096 32.5302 44.5305 36.1168 42.134C39.7033 39.7375 42.4987 36.3314 44.1494 32.3462C45.8002 28.361 46.2321 23.9758 45.3905 19.7452C44.549 15.5145 42.4718 11.6284 39.4217 8.57829L24 24L8.57829 8.57829Z" fill="currentColor"></path>
</g>
<defs>
<clipPath id="clip0_6_319"><rect fill="white" height="48" width="48"></rect></clipPath>
</defs>
</svg>
</div>
<span class="text-white text-2xl font-bold tracking-tight font-display">ASSAD</span>
</div>
<nav class="hidden lg:flex items-center gap-8">
<a class="text-accent-sand hover:text-white transition-colors text-sm font-medium" href="#">Home</a>
<a class="text-accent-sand hover:text-white transition-colors text-sm font-medium" href="#">Animals</a>
<a class="text-primary text-sm font-bold border-b-2 border-primary pb-0.5" href="#">Virtual Tours</a>
<a class="text-accent-sand hover:text-white transition-colors text-sm font-medium" href="#">Education</a>
<a class="text-accent-sand hover:text-white transition-colors text-sm font-medium" href="#">Shop</a>
</nav>
<div class="flex gap-4 items-center">
<button class="hidden sm:flex items-center justify-center rounded-full bg-primary hover:bg-primary-dark transition-all duration-300 text-background-dark text-sm font-bold px-6 py-2.5">
                        Book Tour
                    </button>
<button class="lg:hidden text-white hover:text-primary transition-colors">
<span class="material-symbols-outlined text-3xl">menu</span>
</button>
</div>
</div>
</div>
</header>
<main class="flex-grow flex flex-col items-center w-full bg-pattern-overlay bg-fixed">
<div class="w-full max-w-7xl px-4 md:px-10 lg:px-20 py-8">
<div class="@container">
<div class="flex flex-col justify-end overflow-hidden rounded-3xl bg-surface-dark min-h-[350px] md:min-h-[450px] relative group isolate shadow-2xl border border-white/5">
<div class="absolute inset-0 w-full h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDBKgyKrb1jMe6_yGeZlWRGdbBH43pxi4z0EesWdNuLz3eajydtpMb_kRBmhzF1RL1fHcFiaQy0GQWX6k3lRRLDnPolbWquZ08S8F4eAalfD_qy7sk03lsu_Aaq7Twnp7SQL4e8L3B95M66ISXlfzDRHySSXKHURap66ut1cw4bZv6vEZAI8-DLjMvNoCCjzniyvhhvTseV9QWTCODs-FgBoii6no4_f41cCWlsDeEm3kRp2t-eJnq77wEKitD8jrZEbBvyHLSZPmCs");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-[#102218] via-[#102218]/60 to-transparent"></div>
<div class="relative z-10 p-6 md:p-12 max-w-3xl">
<div class="inline-flex items-center gap-2 px-3 py-1 mb-6 text-xs font-bold tracking-widest text-accent-gold uppercase bg-background-dark/80 backdrop-blur-md rounded-full border border-accent-gold/20">
<span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                            Live from Atlas Mountains
                        </div>
<h1 class="text-white text-4xl md:text-6xl font-extrabold leading-tight mb-4 font-display">
                            Experience the Wild <br/><span class="text-primary text-transparent bg-clip-text bg-gradient-to-r from-primary to-emerald-400">Virtual Guided Tours</span>
</h1>
<p class="text-accent-sand text-sm md:text-lg font-medium max-w-lg mb-8 leading-relaxed">
                            Join our expert rangers for immersive live sessions. Feel the presence of the Atlas Lion and African wildlife from anywhere in the world.
                        </p>
<div class="flex flex-wrap gap-4">
<button class="flex items-center gap-2 bg-white text-background-dark px-6 py-3.5 rounded-full font-bold hover:bg-gray-100 transition-colors">
<span class="material-symbols-outlined text-[24px]">play_circle</span>
                                Watch Preview
                            </button>
<button class="flex items-center gap-2 bg-surface-dark/50 backdrop-blur-sm border border-white/20 text-white px-6 py-3.5 rounded-full font-bold hover:bg-surface-dark transition-colors">
                                View Schedule
                            </button>
</div>
</div>
</div>
</div>
</div>
<div class="w-full max-w-7xl px-4 md:px-10 lg:px-20 pb-8 sticky top-20 z-40">
<div class="bg-surface-dark/95 backdrop-blur-xl border border-white/10 rounded-2xl p-4 shadow-xl">
<div class="flex flex-col lg:flex-row gap-4">
<label class="flex flex-col flex-1 h-12">
<div class="flex w-full flex-1 items-stretch rounded-xl bg-background-dark border border-border-color focus-within:border-primary transition-colors">
<div class="text-gray-400 flex items-center justify-center pl-4 pr-2">
<span class="material-symbols-outlined">search</span>
</div>
<input class="flex w-full bg-transparent border-none text-white focus:ring-0 placeholder:text-gray-500 h-full px-2 text-sm md:text-base font-body" placeholder="Search tours by animal, ranger, or topic..."/>
</div>
</label>
<div class="flex gap-2 overflow-x-auto pb-2 lg:pb-0 no-scrollbar">
<button class="flex h-12 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-background-dark hover:bg-surface-dark-hover px-5 transition-colors border border-border-color group">
<span class="text-accent-sand group-hover:text-white text-sm font-medium">Date</span>
<span class="material-symbols-outlined text-gray-400 group-hover:text-white text-[20px]">calendar_today</span>
</button>
<button class="flex h-12 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-background-dark hover:bg-surface-dark-hover px-5 transition-colors border border-border-color group">
<span class="text-accent-sand group-hover:text-white text-sm font-medium">Language</span>
<span class="material-symbols-outlined text-gray-400 group-hover:text-white text-[20px]">language</span>
</button>
<button class="flex h-12 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-background-dark hover:bg-surface-dark-hover px-5 transition-colors border border-border-color group">
<span class="text-accent-sand group-hover:text-white text-sm font-medium">Category</span>
<span class="material-symbols-outlined text-gray-400 group-hover:text-white text-[20px]">category</span>
</button>
<button class="flex h-12 shrink-0 items-center justify-center gap-x-2 rounded-xl bg-background-dark hover:bg-surface-dark-hover px-5 transition-colors border border-border-color group">
<span class="text-accent-sand group-hover:text-white text-sm font-medium">Price</span>
<span class="material-symbols-outlined text-gray-400 group-hover:text-white text-[20px]">tune</span>
</button>
</div>
</div>
<div class="flex gap-3 pt-4 flex-wrap border-t border-white/5 mt-4">
<div class="text-gray-400 text-sm font-medium self-center mr-2">Sort by:</div>
<button class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-primary/10 hover:bg-primary/20 text-primary border border-primary/20 px-4 transition-all">
<span class="text-xs font-bold uppercase tracking-wide">Upcoming</span>
</button>
<button class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-background-dark hover:bg-surface-dark-hover text-gray-400 hover:text-white px-4 transition-all border border-border-color">
<span class="text-xs font-medium uppercase tracking-wide">Popular</span>
</button>
<button class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-background-dark hover:bg-surface-dark-hover text-gray-400 hover:text-white px-4 transition-all border border-border-color">
<span class="text-xs font-medium uppercase tracking-wide">Price: Low to High</span>
</button>
</div>
</div>
</div>
<div class="w-full max-w-7xl px-4 md:px-10 lg:px-20 pb-20">
<div class="flex justify-between items-end mb-8">
<h3 class="text-white text-2xl font-bold font-display">Available Tours <span class="text-gray-500 font-normal ml-2 text-lg">(12)</span></h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<div class="group flex flex-col bg-surface-dark hover:bg-surface-dark-hover rounded-2xl overflow-hidden border border-white/5 hover:border-primary/50 transition-all duration-300 shadow-lg hover:shadow-2xl hover:shadow-primary/5">
<div class="relative h-56 w-full overflow-hidden">
<div class="absolute top-4 left-4 z-10 bg-red-600/90 backdrop-blur-sm text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">local_fire_department</span>
                            Selling Fast
                        </div>
<img alt="Close up portrait of a male lion" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDlYgOUj9vLa2J2zBBClp4rpUR8feJ_1wu8wF2MFMvDXh5h613X76b66M7IK9qOBsHq-XeUFyz7TV4BlC8PeJ4afCJibhI3CvXCGB7HsndtTraV1uNIPkd1GAqA8QKNEFsZpZ51tNkQgmXQb8O8lAOnQpjlIeP9cTdvAPOT29RsNj4EG5QBaN0NhJNonBOBC7Htr-OmI140jjF8fGTAhCKZmAXSJIVjb0V4e53HV0YIRocWeYU5zyHfEBK7men8kkJp88BUlivkAuGp"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-dark via-transparent to-transparent opacity-60"></div>
</div>
<div class="flex flex-col flex-1 p-6">
<div class="flex justify-between items-start mb-3">
<h4 class="text-white text-xl font-bold leading-tight group-hover:text-primary transition-colors font-display">Sunrise with the King</h4>
<div class="flex items-center gap-1 text-accent-gold bg-accent-gold/10 px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="text-xs font-bold">4.9</span>
</div>
</div>
<p class="text-accent-sand/70 text-sm mb-5 line-clamp-2">Experience the morning roar of the Atlas Lion in this exclusive sunrise session.</p>
<div class="grid grid-cols-2 gap-y-3 gap-x-2 mb-6 text-sm text-gray-300">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">calendar_month</span>
                                Today
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">schedule</span>
                                08:00 AM
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">translate</span>
                                English
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">timer</span>
                                45 mins
                            </div>
</div>
<div class="mt-auto pt-4 border-t border-white/5">
<div class="flex justify-between text-xs text-gray-400 mb-2">
<span>3 spots left</span>
<span class="text-white font-medium">90% Full</span>
</div>
<div class="w-full bg-background-dark h-1.5 rounded-full mb-5 overflow-hidden">
<div class="bg-red-500 h-full rounded-full" style="width: 90%"></div>
</div>
<div class="flex items-center justify-between gap-4">
<div class="flex flex-col">
<span class="text-xs text-gray-400 mb-0.5">Per Person</span>
<span class="text-2xl font-bold text-accent-gold">$15.00</span>
</div>
<button class="flex-1 bg-white hover:bg-gray-100 text-background-dark font-bold py-3 px-4 rounded-xl transition-colors text-sm">
                                    Book Now
                                </button>
</div>
</div>
</div>
</div>
<div class="group flex flex-col bg-surface-dark hover:bg-surface-dark-hover rounded-2xl overflow-hidden border border-white/5 hover:border-primary/50 transition-all duration-300 shadow-lg hover:shadow-2xl hover:shadow-primary/5">
<div class="relative h-56 w-full overflow-hidden">
<div class="absolute top-4 left-4 z-10 bg-indigo-900/90 backdrop-blur-sm text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">nights_stay</span>
                            Night Tour
                        </div>
<img alt="Black scorpion on sand" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVtRg7xcEdmZVqckOFFtQnaYNWD7vgG_zZc4uskbTCN_lFmCquFKPHicOtefx0blhjsjURMEA97t7QnqLtWjlh4nzSrOUyP8PTzlLI_E7IwMJkBhzVFF-QSQtp7wLyO3_diH9_-oV_a2oj_jBmuLTPUfHRfTj2yf_fmG-EFpGR_sqhjkf3Mf7jckUKR3lAAlU6GEZiZptqAP7oL4Yz30ZydUN9j3pluSae4AE99BnZx7fyoNpgb9JhsnY877EYDbds-LhjwbZu7Um1"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-dark via-transparent to-transparent opacity-60"></div>
</div>
<div class="flex flex-col flex-1 p-6">
<div class="flex justify-between items-start mb-3">
<h4 class="text-white text-xl font-bold leading-tight group-hover:text-primary transition-colors font-display">Night Prowl: Scorpions</h4>
<div class="flex items-center gap-1 text-accent-gold bg-accent-gold/10 px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="text-xs font-bold">4.7</span>
</div>
</div>
<p class="text-accent-sand/70 text-sm mb-5 line-clamp-2">Discover the hidden world of nocturnal creatures using UV tracking technology.</p>
<div class="grid grid-cols-2 gap-y-3 gap-x-2 mb-6 text-sm text-gray-300">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">calendar_month</span>
                                Tomorrow
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">schedule</span>
                                09:00 PM
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">translate</span>
                                Arabic
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">timer</span>
                                60 mins
                            </div>
</div>
<div class="mt-auto pt-4 border-t border-white/5">
<div class="flex justify-between text-xs text-gray-400 mb-2">
<span>20 spots left</span>
<span class="text-white font-medium">40% Full</span>
</div>
<div class="w-full bg-background-dark h-1.5 rounded-full mb-5 overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 40%"></div>
</div>
<div class="flex items-center justify-between gap-4">
<div class="flex flex-col">
<span class="text-xs text-gray-400 mb-0.5">Per Person</span>
<span class="text-2xl font-bold text-accent-gold">$10.00</span>
</div>
<button class="flex-1 bg-white hover:bg-gray-100 text-background-dark font-bold py-3 px-4 rounded-xl transition-colors text-sm">
                                    Book Now
                                </button>
</div>
</div>
</div>
</div>
<div class="group flex flex-col bg-surface-dark hover:bg-surface-dark-hover rounded-2xl overflow-hidden border border-white/5 hover:border-primary/50 transition-all duration-300 shadow-lg hover:shadow-2xl hover:shadow-primary/5">
<div class="relative h-56 w-full overflow-hidden">
<div class="absolute top-4 left-4 z-10 bg-blue-500/90 backdrop-blur-sm text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">school</span>
                            Family Friendly
                        </div>
<img alt="Ranger looking at wildlife" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuALSl5vGWLdjaWAtNAosDYruhh3xW4wxE9QmDAr-jpDdGw_lH5BsBhdvtg_fe1Z4qK3muw6G3aBGXDjdrfvTHovPMFfbiyOu-Cy1tsrIefVgZ0xkSX-JsIfFsLGYjlDzAVr8ITyUG3ApYV1S_Stj-hMeZy0Ye8ryPpK-w66oNOoC8ptwUmRVr_7ai9AzUdkoTgwufbXtKjxWqfstpTZGW6SrrV5mu-8MxrXf_8WwDY3dyL3PfwhvcFEui7Yk8erLp3U2dXjyWd2AnOT"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-dark via-transparent to-transparent opacity-60"></div>
</div>
<div class="flex flex-col flex-1 p-6">
<div class="flex justify-between items-start mb-3">
<h4 class="text-white text-xl font-bold leading-tight group-hover:text-primary transition-colors font-display">Junior Ranger: Safari 101</h4>
<div class="flex items-center gap-1 text-accent-gold bg-accent-gold/10 px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="text-xs font-bold">5.0</span>
</div>
</div>
<p class="text-accent-sand/70 text-sm mb-5 line-clamp-2">A fun, interactive session for kids to learn about animal tracks and habits.</p>
<div class="grid grid-cols-2 gap-y-3 gap-x-2 mb-6 text-sm text-gray-300">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">calendar_month</span>
                                Sat, Oct 12
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">schedule</span>
                                02:00 PM
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">translate</span>
                                French
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">timer</span>
                                30 mins
                            </div>
</div>
<div class="mt-auto pt-4 border-t border-white/5">
<div class="flex justify-between text-xs text-gray-400 mb-2">
<span>Fully Booked</span>
<span class="text-white font-medium">Waitlist Only</span>
</div>
<div class="w-full bg-background-dark h-1.5 rounded-full mb-5 overflow-hidden">
<div class="bg-gray-500 h-full rounded-full" style="width: 100%"></div>
</div>
<div class="flex items-center justify-between gap-4">
<div class="flex flex-col">
<span class="text-xs text-gray-400 mb-0.5">Per Person</span>
<span class="text-2xl font-bold text-white">Free</span>
</div>
<button class="flex-1 bg-white/10 text-gray-400 cursor-not-allowed font-bold py-3 px-4 rounded-xl transition-colors text-sm" disabled="">
                                    Join Waitlist
                                </button>
</div>
</div>
</div>
</div>
<div class="group flex flex-col bg-surface-dark hover:bg-surface-dark-hover rounded-2xl overflow-hidden border border-white/5 hover:border-primary/50 transition-all duration-300 shadow-lg hover:shadow-2xl hover:shadow-primary/5">
<div class="relative h-56 w-full overflow-hidden">
<div class="absolute top-4 left-4 z-10 bg-amber-600/90 backdrop-blur-sm text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">sunny</span>
                            Desert Special
                        </div>
<img alt="Fennec fox with large ears" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuATMJDV0p3lELbUkGnHeAfZOvcMCp5iAEFqCIKu_aXd6-hC6oqa_83p3oAnKHUQ82Y05lASDMvOW3885ApHvOkDKpORJYHEXWLD_Golh0TgahiaKWLXyKeN1OScNhwY9Y_Z-e4IqsmRpK5mvSV1tTr_vEw3Vk3dDFi21EhJZcWgK7OXG7jNvQ8Zu1lhALq0Z8IkA3P20_8z3GZ_ppRHNZzftjA7zpWDw1miVCcXHq9ukIFLyLDPJd5DdpXVtP2wVehSXnDb022aj0u2"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-dark via-transparent to-transparent opacity-60"></div>
</div>
<div class="flex flex-col flex-1 p-6">
<div class="flex justify-between items-start mb-3">
<h4 class="text-white text-xl font-bold leading-tight group-hover:text-primary transition-colors font-display">Secrets of the Sahara</h4>
<div class="flex items-center gap-1 text-accent-gold bg-accent-gold/10 px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="text-xs font-bold">4.8</span>
</div>
</div>
<p class="text-accent-sand/70 text-sm mb-5 line-clamp-2">Meet the smallest fox in the world and learn how it survives the desert heat.</p>
<div class="grid grid-cols-2 gap-y-3 gap-x-2 mb-6 text-sm text-gray-300">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">calendar_month</span>
                                Sun, Oct 13
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">schedule</span>
                                10:00 AM
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">translate</span>
                                English
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">timer</span>
                                45 mins
                            </div>
</div>
<div class="mt-auto pt-4 border-t border-white/5">
<div class="flex justify-between text-xs text-gray-400 mb-2">
<span>12 spots left</span>
<span class="text-white font-medium">60% Full</span>
</div>
<div class="w-full bg-background-dark h-1.5 rounded-full mb-5 overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 60%"></div>
</div>
<div class="flex items-center justify-between gap-4">
<div class="flex flex-col">
<span class="text-xs text-gray-400 mb-0.5">Per Person</span>
<span class="text-2xl font-bold text-accent-gold">$12.00</span>
</div>
<button class="flex-1 bg-white hover:bg-gray-100 text-background-dark font-bold py-3 px-4 rounded-xl transition-colors text-sm">
                                    Book Now
                                </button>
</div>
</div>
</div>
</div>
<div class="group flex flex-col bg-surface-dark hover:bg-surface-dark-hover rounded-2xl overflow-hidden border border-white/5 hover:border-primary/50 transition-all duration-300 shadow-lg hover:shadow-2xl hover:shadow-primary/5">
<div class="relative h-56 w-full overflow-hidden">
<div class="absolute top-4 left-4 z-10 bg-purple-600/90 backdrop-blur-sm text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">landscape</span>
                            Scenic Tour
                        </div>
<img alt="Atlas mountains view" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbHHcl7strMKDLrfQ_FmW05eoZH-MVyBTpKOqIQMNM0Hm3J2hKiagZBqW32bQlU1exydfYX0WaymBBM49szoiXWS_K4iyF_dfkIAIW-pgQfT5Gnb5lu3kXw2i_bXtELeW5_iWKVuePwtQCNojYTo_OmDk-FRggxELsZx4nGxsGBgjH-7fa-GEfkZ94IPa2Nofnql5ibG8P9Obv0Ne4-Yz7b4IJWUb2WeNU3zWLb-44c4db3f4TLs9l7bwLx1Pl8NgA1uvwfv5m6jRW"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-dark via-transparent to-transparent opacity-60"></div>
</div>
<div class="flex flex-col flex-1 p-6">
<div class="flex justify-between items-start mb-3">
<h4 class="text-white text-xl font-bold leading-tight group-hover:text-primary transition-colors font-display">High Atlas Expedition</h4>
<div class="flex items-center gap-1 text-accent-gold bg-accent-gold/10 px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="text-xs font-bold">4.6</span>
</div>
</div>
<p class="text-accent-sand/70 text-sm mb-5 line-clamp-2">A virtual hike through the breathtaking landscapes of the High Atlas.</p>
<div class="grid grid-cols-2 gap-y-3 gap-x-2 mb-6 text-sm text-gray-300">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">calendar_month</span>
                                Mon, Oct 14
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">schedule</span>
                                04:30 PM
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">translate</span>
                                French
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">timer</span>
                                90 mins
                            </div>
</div>
<div class="mt-auto pt-4 border-t border-white/5">
<div class="flex justify-between text-xs text-gray-400 mb-2">
<span>Open Availability</span>
<span class="text-white font-medium">15% Full</span>
</div>
<div class="w-full bg-background-dark h-1.5 rounded-full mb-5 overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 15%"></div>
</div>
<div class="flex items-center justify-between gap-4">
<div class="flex flex-col">
<span class="text-xs text-gray-400 mb-0.5">Per Person</span>
<span class="text-2xl font-bold text-accent-gold">$8.00</span>
</div>
<button class="flex-1 bg-white hover:bg-gray-100 text-background-dark font-bold py-3 px-4 rounded-xl transition-colors text-sm">
                                    Book Now
                                </button>
</div>
</div>
</div>
</div>
<div class="group flex flex-col bg-surface-dark hover:bg-surface-dark-hover rounded-2xl overflow-hidden border border-white/5 hover:border-primary/50 transition-all duration-300 shadow-lg hover:shadow-2xl hover:shadow-primary/5">
<div class="relative h-56 w-full overflow-hidden">
<div class="absolute top-4 left-4 z-10 bg-emerald-600/90 backdrop-blur-sm text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-sm flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">forest</span>
                            Forest Life
                        </div>
<img alt="Barbary macaque monkey" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXHYrNvJUe4WrxGD76CjfrZgMt96C3eYsFwxgk_kNmDACHuqlCwgU_SRk6Xgnd7EMLG0xT0F2YDiDTTrzoDqKXQYMbfLE9uyupO3zd9_Vq6CAkxJbXDsnkmUwMQahC8yj1o3G20lQjMa7fCIW3FppnKhg4w56eFVJF3NGTyOFKIDNGrXJX-k_FHXmZ-YtaxOiLxoMJaIyZLwkFdjt7rKUQ0Bqz4sgtTnu0NOO4uSqLKHHVjHD71DqgY11-GxQEnOR-9GG_eRoPF9cC"/>
<div class="absolute inset-0 bg-gradient-to-t from-surface-dark via-transparent to-transparent opacity-60"></div>
</div>
<div class="flex flex-col flex-1 p-6">
<div class="flex justify-between items-start mb-3">
<h4 class="text-white text-xl font-bold leading-tight group-hover:text-primary transition-colors font-display">Macaques of Cedar Forest</h4>
<div class="flex items-center gap-1 text-accent-gold bg-accent-gold/10 px-2 py-1 rounded-md">
<span class="material-symbols-outlined text-[16px] fill-current">star</span>
<span class="text-xs font-bold">4.5</span>
</div>
</div>
<p class="text-accent-sand/70 text-sm mb-5 line-clamp-2">Observe social behaviors of the endangered Barbary Macaque in Ifrane.</p>
<div class="grid grid-cols-2 gap-y-3 gap-x-2 mb-6 text-sm text-gray-300">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">calendar_month</span>
                                Tue, Oct 15
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">schedule</span>
                                11:30 AM
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">translate</span>
                                Spanish
                            </div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]">timer</span>
                                50 mins
                            </div>
</div>
<div class="mt-auto pt-4 border-t border-white/5">
<div class="flex justify-between text-xs text-gray-400 mb-2">
<span>18 spots left</span>
<span class="text-white font-medium">50% Full</span>
</div>
<div class="w-full bg-background-dark h-1.5 rounded-full mb-5 overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 50%"></div>
</div>
<div class="flex items-center justify-between gap-4">
<div class="flex flex-col">
<span class="text-xs text-gray-400 mb-0.5">Per Person</span>
<span class="text-2xl font-bold text-accent-gold">$12.00</span>
</div>
<button class="flex-1 bg-white hover:bg-gray-100 text-background-dark font-bold py-3 px-4 rounded-xl transition-colors text-sm">
                                    Book Now
                                </button>
</div>
</div>
</div>
</div>
</div>
<div class="flex justify-center mt-20">
<button class="group flex items-center gap-3 px-10 py-4 rounded-full border border-primary text-primary hover:bg-primary hover:text-background-dark transition-all duration-300 font-bold shadow-lg shadow-primary/10">
<span>Load More Tours</span>
<span class="material-symbols-outlined group-hover:translate-y-1 transition-transform">expand_more</span>
</button>
</div>
</div>
</main>
<footer class="bg-[#051a0d] border-t border-white/5 py-16 px-4 md:px-10 lg:px-20 text-sm">
<div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
<div class="flex flex-col gap-6">
<div class="flex items-center gap-3 text-white">
<div class="size-8 text-primary">
<svg class="w-full h-full" fill="currentColor" viewBox="0 0 48 48">
<path d="M8.578 8.578C5.528 11.628 3.451 15.514 2.61 19.745c-.842 4.23.411 9.385 2.06 13.371 1.65 3.985 4.446 7.391 8.033 9.787 3.587 2.397 7.803 3.676 12.117 3.676s8.53-1.28 12.117-3.676c3.586-2.396 6.382-5.802 8.032-9.787 1.65-3.986 2.082-8.371 1.24-12.601-.84-4.23-2.918-8.117-5.968-11.167L24 24 8.578 8.578Z"></path>
</svg>
</div>
<h2 class="text-2xl font-bold font-display tracking-tight">ASSAD</h2>
</div>
<p class="text-gray-400 leading-relaxed">
                    ASSAD is a virtual platform dedicated to the preservation and celebration of African wildlife, with a special focus on the majestic Atlas Lion.
                </p>
<div class="flex gap-4">
<a class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-gray-400 hover:text-white hover:bg-primary/20 transition-all" href="#">
<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
<path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
</svg>
</a>
<a class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-gray-400 hover:text-white hover:bg-primary/20 transition-all" href="#">
<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
<path clip-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.468 2.527c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" fill-rule="evenodd"></path>
</svg>
</a>
</div>
</div>
<div>
<h4 class="text-white font-bold font-display mb-6">Discover</h4>
<ul class="flex flex-col gap-3 text-gray-400">
<li><a class="hover:text-primary transition-colors flex items-center gap-2" href="#"><span class="w-1 h-1 rounded-full bg-primary/50"></span>All Tours</a></li>
<li><a class="hover:text-primary transition-colors flex items-center gap-2" href="#"><span class="w-1 h-1 rounded-full bg-primary/50"></span>Animal Encyclopedia</a></li>
<li><a class="hover:text-primary transition-colors flex items-center gap-2" href="#"><span class="w-1 h-1 rounded-full bg-primary/50"></span>Live Cams</a></li>
<li><a class="hover:text-primary transition-colors flex items-center gap-2" href="#"><span class="w-1 h-1 rounded-full bg-primary/50"></span>Conservation Projects</a></li>
</ul>
</div>
<div>
<h4 class="text-white font-bold font-display mb-6">Support</h4>
<ul class="flex flex-col gap-3 text-gray-400">
<li><a class="hover:text-primary transition-colors flex items-center gap-2" href="#"><span class="w-1 h-1 rounded-full bg-primary/50"></span>Donate</a></li>
<li><a class="hover:text-primary transition-colors flex items-center gap-2" href="#"><span class="w-1 h-1 rounded-full bg-primary/50"></span>Adopt an Animal</a></li>
<li><a class="hover:text-primary transition-colors flex items-center gap-2" href="#"><span class="w-1 h-1 rounded-full bg-primary/50"></span>Become a Ranger</a></li>
<li><a class="hover:text-primary transition-colors flex items-center gap-2" href="#"><span class="w-1 h-1 rounded-full bg-primary/50"></span>Contact Us</a></li>
</ul>
</div>
<div class="flex flex-col gap-6">
<h4 class="text-white font-bold font-display">Stay Connected</h4>
<p class="text-gray-400 text-xs">Join our newsletter for updates and exclusive content.</p>
<div class="flex">
<input class="bg-white/5 border border-white/10 rounded-l-lg px-4 py-2 text-white placeholder:text-gray-500 text-sm focus:ring-1 focus:ring-primary focus:border-primary w-full outline-none" placeholder="Your email" type="email"/>
<button class="bg-primary hover:bg-primary-dark text-background-dark font-bold px-4 py-2 rounded-r-lg transition-colors">
<span class="material-symbols-outlined text-[20px]">arrow_forward</span>
</button>
</div>
<div class="mt-4 flex items-center gap-3 bg-gradient-to-r from-red-900/30 to-green-900/30 border border-white/5 rounded-lg p-3">
<span class="material-symbols-outlined text-accent-gold text-2xl">sports_soccer</span>
<div class="flex flex-col">
<span class="text-[10px] uppercase tracking-widest text-gray-400">Official Partner</span>
<span class="text-white font-bold text-sm">CAN 2025 Morocco</span>
</div>
</div>
</div>
</div>
<div class="border-t border-white/5 mt-12 pt-8 text-center text-xs text-gray-500">
<p>© 2024 ASSAD Virtual Zoo. All rights reserved.</p>
</div>
</footer>

</body></html>