@extends('layouts.app')

@section('title', 'Myth of Yggdrasil - A Classic Modern Adventure')
@section('description', 'Explore Myth Of Yggdrasil, a refreshed classic MMORPG adventure.')

@section('content')
<!-- Hero Section -->
<section class="w-full relative bg-ui-bg-subtle text-brand-main">
    <div class="flex flex-col text-center gap-3 lg:gap-6">
        <div class="bg-[#F6BF96] rounded-md py-2 text-white font-robotoCond font-bold uppercase tracking-wide text-base">OFFICIAL LAUNCH 10/10/2025</div>
        <div class="flex flex-col-reverse gap-5 items-center lg:items-start justify-center lg:flex-row w-full">
            <div class="flex flex-col gap-5 justify-center w-full max-w-[550px]">
                <div class="relative w-[60%] h-[150px] mx-auto my-20 animate-float">
                    <img alt="Myth of Yggdrasil Logo" loading="lazy" decoding="async" data-nimg="fill" class="object-contain" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" sizes="100vw" srcSet="{{ asset('img/logo-myth.png') }} 640w, {{ asset('img/logo-myth.png') }} 750w, {{ asset('img/logo-myth.png') }} 828w, {{ asset('img/logo-myth.png') }} 1080w, {{ asset('img/logo-myth.png') }} 1200w, {{ asset('img/logo-myth.png') }} 1920w, {{ asset('img/logo-myth.png') }} 2048w, {{ asset('img/logo-myth.png') }} 3840w" src="{{ asset('img/logo-myth.png') }}"/>
                </div>
                <div class="text-4xl md:text-5xl lg:text-6xl justify-items-center font-core leading-tight">
                    <h1>
                        <div class="flex items-center gap-5 justify-left">
                            <div class="relative w-[82px] h-[94px]">
                                <img alt="Explorers Team 1" loading="lazy" decoding="async" data-nimg="fill" class="scale-x-[-1]" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" sizes="100vw" srcSet="{{ asset('img/explore.png') }} 640w, {{ asset('img/explore.png') }} 750w, {{ asset('img/explore.png') }} 828w, {{ asset('img/explore.png') }} 1080w, {{ asset('img/explore.png') }} 1200w, {{ asset('img/explore.png') }} 1920w, {{ asset('img/explore.png') }} 2048w, {{ asset('img/explore.png') }} 3840w" src="{{ asset('img/explore.png') }}"/>
                            </div>
                            <div class="flex flex-col items-start justify-cente">
                                <span class="uppercase">THE EVOLUTION</span>
                                <span class="text-brand-purple">OF A CLASSIC</span>
                            </div>
                        </div>
                    </h1>
                </div>
                <div class="text-justify lg:leading-7 p-6 md:p-3 font-robotoCond text-xl font-black">
                    <div class="prose prose-lg max-w-none">
                        <p class="text-lg font-robotoCond leading-7 my-4">Discover an MMORPG that honors its origins while embracing modern times. Myth of Yggdrasil offers an experience that welcomes players with strategic freedom, modern features, and the comfort to evolve at their own pace. Explore a classic universe, reimagined and full of surprises. An open future, ready for a new story, awaits you.</p>
                    </div>
                </div>
                <div class="flex justify-center w-full">
                    <div class="grid grid-cols-2 gap-5 md:flex-grow justify-between">
                        <div class="flex items-center justify-center">
                            <a href="#slider-section" class="bg-white leading-none relative border-2 rounded-lg border-solid border-brand-main w-full py-5 pl-5 pr-2 font-core uppercase text-lg hover:bg-brand-main hover:text-white duration-150 ease-in-out transition-colors">
                                <div class="w-[49px] h-[89px] absolute -top-4 -left-7 -scale-x-100">
                                    <img alt="Isabela NPC" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" sizes="100vw" srcSet="{{ asset('img/EG_isabella2.png') }} 640w, {{ asset('img/EG_isabella2.png') }} 750w, {{ asset('img/EG_isabella2.png') }} 828w, {{ asset('img/EG_isabella2.png') }} 1080w, {{ asset('img/EG_isabella2.png') }} 1200w, {{ asset('img/EG_isabella2.png') }} 1920w, {{ asset('img/EG_isabella2.png') }} 2048w, {{ asset('img/EG_isabella2.png') }} 3840w" src="{{ asset('img/EG_isabella2.png') }}"/>
                                </div>Explore More
                            </a>
                        </div>
                        <div class="flex items-center justify-center">
                            <a href="#joinNow-section" class="bg-white leading-none relative border-2 rounded-lg border-solid text-brand-green border-brand-green w-full py-5 px-2 font-core uppercase text-lg hover:bg-brand-green hover:text-white duration-150 ease-in-out transition-colors">
                                <span class="mr-2">Play Now</span>
                            </a>
                        </div>
                        <div class="flex items-center justify-center">
                            <a href="{{ url('/blog') }}" class="bg-white leading-none relative border-2 rounded-lg border-solid text-brand-purple border-brand-purple w-full py-5 px-2 font-core uppercase text-lg hover:bg-brand-purple hover:text-white duration-150 ease-in-out transition-colors">News</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center w-full h-fit max-w-[400px] lg:max-w-[600px]">
                <div class="relative">
                    <img alt="Tree of Yggdrasil" loading="lazy" width="495" height="861" decoding="async" data-nimg="1" class="ease-in-out duration-300 hover:scale-105" style="color:transparent" src="{{ asset('img/ygg1.gif') }}"/>
                    <div class="absolute bottom-12 left-10 w-[65px] h-[115px]">
                        <img alt="Horong Monster 01" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/horong4.gif') }}"/>
                    </div>
                    <div class="absolute bottom-4 right-12 w-[65px] h-[115px]">
                        <img alt="Horong Monster 02" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/horong3.gif') }}"/>
                    </div>
                    <div class="absolute bottom-28 right-4 w-[65px] h-[115px]">
                        <img alt="Horong Monster 03" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/horong2.gif') }}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Slider Section -->
<section id="slider-section" class="mt-20 w-full">
    <div class="flex flex-col items-center gap-10 relative mt-10 md:mt-0">
        <div class="w-full relative z-10 flex flex-col items-center gap-3 max-w-[1200px] mx-auto px-4 md:px-6">
            <div class="flex items-center justify-between gap-6 w-full">
                <button class="transition-fg relative inline-flex items-center justify-center overflow-hidden rounded-md outline-none disabled:bg-ui-bg-disabled disabled:border-ui-border-base disabled:text-ui-fg-disabled disabled:!shadow-none disabled:after:hidden after:absolute after:inset-0 after:content-[&#x27;&#x27;] shadow-buttons-neutral text-ui-fg-base border-ui-border-base after:button-neutral-gradient hover:after:button-neutral-hover-gradient active:bg-ui-button-neutral-pressed active:after:button-neutral-pressed-gradient focus:shadow-buttons-neutral-focus p-[5px] h-16 w-14 z-10 bg-[#5B719F] hover:bg-[#5B719F]/90 border-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none" class="scale-150">
                        <path stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M1.944 7.5h11.112M5.722 11.278 1.944 7.5l3.778-3.778"></path>
                    </svg>
                </button>
                <div class="flex flex-col items-start z-10">
                    <h1 class="text-4xl md:text-7xl font-core leading-none break-words max-w-[100%] md:max-w-full">
                        <span class="capitalize">NEW<!-- --> </span><span class="capitalize text-brand-green">REALITY</span>
                    </h1>
                </div>
                <button class="transition-fg relative inline-flex items-center justify-center overflow-hidden rounded-md outline-none disabled:bg-ui-bg-disabled disabled:border-ui-border-base disabled:text-ui-fg-disabled disabled:!shadow-none disabled:after:hidden after:absolute after:inset-0 after:content-[&#x27;&#x27;] shadow-buttons-neutral text-ui-fg-base border-ui-border-base after:button-neutral-gradient hover:after:button-neutral-hover-gradient active:bg-ui-button-neutral-pressed active:after:button-neutral-pressed-gradient focus:shadow-buttons-neutral-focus p-[5px] h-16 w-14 z-10 bg-[#5B719F] hover:bg-[#5B719F]/90 border-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none" class="scale-150">
                        <path stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.056 7.5H1.944M9.278 3.722 13.056 7.5l-3.778 3.778"></path>
                    </svg>
                </button>
            </div>
            <div class="max-w-[80%] text-start md:text-justify lg:leading-7 p-3 font-robotoCond text-xl font-black">
                <div class="prose prose-lg max-w-none">
                    <p class="text-lg font-robotoCond leading-7 my-4">Explore vibrant new maps, face revitalized monsters, and discover new ways to interact with the world. The gameplay is dynamic and full of possibilities, while the lore unfolds in new chapters waiting to be explored.</p>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-8 w-full">
                <div class="w-full flex justify-center items-center order-1 md:order-2">
                    <div class="w-full max-w-full rounded-lg overflow-hidden aspect-video">
                        <iframe src="https://www.youtube.com/embed/BeqTEJQwmgw?autoplay=1&amp;mute=1&amp;loop=1&amp;playlist=BeqTEJQwmgw&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" title="YouTube video player" frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowFullScreen="" loading="lazy" class="w-full h-full"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Journey Allies Section -->
<section id="journey-allies-section" class="py-16">
    <div class="w-full relative z-10 flex flex-col items-center gap-3 max-w-[1200px] mx-auto px-4 md:px-6">
        <div class="flex flex-col-reverse md:flex-row justify-center items-center gap-6">
            <div class="flex flex-col items-center md:items-end">
                <h1 class="text-5xl md:text-7xl font-core whitespace-nowrap">JOURNEY <span class="text-brand-purple">ALLIES</span></h1>
                <p class="text-sm md:text-base text-right mr-2">Play Together, Earn Together</p>
            </div>
            <div class="relative w-[81px] h-[83px]">
                <img alt="Journey Allies Image" loading="lazy" decoding="async" data-nimg="fill" 
                     src="{{ asset('img/journey-allies.gif') }}"
                     style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;"/>
            </div>
        </div>
        
        <div class="max-w-[80%] text-justify lg:leading-7 p-3 font-robotoCond text-xl font-black">
            <div class="prose prose-lg max-w-none">
                <p class="text-lg font-robotoCond leading-7 my-4">
                    Bring your friends along on your Myth of Yggdrasil journey and grow stronger together! 
                    The Journey Allies system rewards players who team up, making every battle more rewarding 
                    for both the Recruiter and Recruits. Invite as many friends as you want and unlock exclusive 
                    rewards by playing side by side.
                </p>
            </div>
        </div>
        
        <div class="p-6 md:p-0 grid grid-cols grid-rows-4 md:grid-cols-2 md:grid-rows-2 lg:grid-cols-4 lg:grid-rows-1 gap-14 md:gap-0">
                    
                    <!-- Card 1 - RECRUIT ALLIES -->

                    <div class="p-4 md:min-h-[400px] hover:-translate-y-1 transition-transform delay-50 shadow-[0_5px_rgba(91,_113,_159,_0.4),_0_10px_rgba(91,_113,_159,_0.3),_0_15px_rgba(91,_113,_159,_0.2),_0_20px_rgba(91,_113,_159,_0.1),_0_25px_rgba(91,_113,_159,_0.05)] border border-solid border-brand-main rounded-lg flex justify-start items-center flex-row p-3 gap-2 w-full md:flex-col md:scale-95">
                        <div class="min-h-[200px] justify-around flex flex-col items-center">
                            <h2 class="font-core text-5xl ">1</h2>
                            <div class="relative my-5 w-[131px] h-[99px] flex items-center justify-center">
                                <img alt="RECRUIT ALLIES" loading="lazy" src="{{ asset('img/recruit_allies.png') }}" width="133" height="98"/>
                                </div>
                            </div>
                                <div class="flex flex-col items-center justify-center gap-3">
                                <div class="border-t opacity-45 border-solid border-brand-main w-[80%]"></div>
                                <h3 class="font-core text-2xl leading-5 ">RECRUIT ALLIES</h3>
                                <div class="border-t opacity-45 border-solid border-brand-main w-[80%]"></div>
                                <div class="min-h-[125px] text-start leading-5 px-1 md:p-3 font-robotoCond font-black"><div class="prose prose-lg max-w-none"><p class="text-lg font-robotoCond leading-7 my-4">Invite unlimited friends to join the adventure. Each Recruit is linked to a single Recruiter, but you can have as many Recruits as you want!</p></div></div></div></div>

                    <!-- Card 2 - GROW AFFINITY -->
                    <div class="p-4 md:min-h-[400px] hover:-translate-y-1 transition-transform delay-50 shadow-[0_5px_rgba(91,_113,_159,_0.4),_0_10px_rgba(91,_113,_159,_0.3),_0_15px_rgba(91,_113,_159,_0.2),_0_20px_rgba(91,_113,_159,_0.1),_0_25px_rgba(91,_113,_159,_0.05)] border border-solid border-[#5B719F] rounded-lg flex justify-start items-center flex-row p-3 gap-2 w-full md:flex-col md:scale-95">
                        <div class="min-h-[200px] justify-around flex flex-col items-center">
                            <h2 class="font-core text-5xl ">2</h2>
                            <div class="relative my-5 w-[131px] h-[99px] flex items-center justify-center">
                                <img alt="GROW AFFINITY" loading="lazy" src="{{ asset('img/grow_affinity.png') }}" width="109" height="105"/>
                                </div>
                            </div>
                                <div class="flex flex-col items-center justify-center gap-3">
                                <div class="border-t opacity-45 border-solid border-brand-main w-[80%]"></div>
                                <h3 class="font-core text-2xl leading-5 ">GROW AFFINITY</h3>
                                <div class="border-t opacity-45 border-solid border-brand-main w-[80%]"></div>
                                <div class="min-h-[125px] text-start leading-5 px-1 md:p-3 font-robotoCond font-black"><div class="prose prose-lg max-w-none"><p class="text-lg font-robotoCond leading-7 my-4">Earn Affinity Points by playing in a party. Get a bonus when teaming up with Allies. Every second spent battling together contributes to exclusive rewards.</p></div></div></div></div>

                    <!-- Card 3 - UNLOCK REWARDS -->
                    <div class="p-4 md:min-h-[400px] hover:-translate-y-1 transition-transform delay-50 shadow-[0_5px_rgba(91,_113,_159,_0.4),_0_10px_rgba(91,_113,_159,_0.3),_0_15px_rgba(91,_113,_159,_0.2),_0_20px_rgba(91,_113,_159,_0.1),_0_25px_rgba(91,_113,_159,_0.05)] border border-solid border-brand-main rounded-lg flex justify-start items-center flex-row p-3 gap-2 w-full md:flex-col md:scale-95">
                        <div class="min-h-[200px] justify-around flex flex-col items-center">
                            <h2 class="font-core text-5xl ">3</h2>
                            <div class="relative my-5 w-[131px] h-[99px] flex items-center justify-center">
                                <img alt="UNLOCK REWARDS" loading="lazy" src="{{ asset('img/unlock_rewards.png') }}" width="107" height="125"/>
                                </div>
                            </div>
                                <div class="flex flex-col items-center justify-center gap-3">
                                <div class="border-t opacity-45 border-solid border-brand-main w-[80%]"></div>
                                <h3 class="font-core text-2xl leading-5 ">UNLOCK REWARDS</h3>
                                <div class="border-t opacity-45 border-solid border-brand-main w-[80%]"></div>
                                <div class="min-h-[125px] text-start leading-5 px-1 md:p-3 font-robotoCond font-black"><div class="prose prose-lg max-w-none"><p class="text-lg font-robotoCond leading-7 my-4">The more you play together, the more valuable the rewards, like quality of life boosts, costumes, and special chromas.</p></div></div></div></div>

                    <!-- Card 4 - BE BENEFACTOR -->
                    <div class="p-4 md:min-h-[400px] hover:-translate-y-1 transition-transform delay-50 shadow-[0_5px_rgba(136,_104,_191,_0.4),_0_10px_rgba(136,_104,_191,_0.3),_0_15px_rgba(136,_104,_191,_0.2),_0_20px_rgba(136,_104,_191,_0.1),_0_25px_rgba(136,_104,_191,_0.05)] border border-solid border-brand-purple rounded-lg flex justify-start items-center flex-row p-3 gap-2 w-full md:flex-col md:scale-95">
                        <div class="min-h-[200px] justify-around flex flex-col items-center">
                            <h2 class="font-core text-5xl text-brand-purple">4</h2>
                            <div class="relative my-5 w-[131px] h-[99px] flex items-center justify-center">
                                <img alt="BE BENEFACTOR"  loading="lazy" src="{{ asset('img/be_benefactor.png') }}" width="119" height="126"/>
                                </div>
                            </div>
                                <div class="flex flex-col items-center justify-center gap-3">
                                <div class="border-t opacity-45 border-solid border-brand-main w-[80%]"></div>
                                <h3 class="font-core text-2xl leading-5 text-brand-purple">BE BENEFACTOR</h3>
                                <div class="border-t opacity-45 border-solid border-brand-main w-[80%]"></div>
                                <div class="min-h-[125px] text-start leading-5 px-1 md:p-3 font-robotoCond font-black"><div class="prose prose-lg max-w-none"><p class="text-lg font-robotoCond leading-7 my-4">When your Recruits activate their Benefector, you receive 10% of the time as a bonus. Keep your Benefector status active throughout the month with the support of your Recruits!</p></div></div></div></div>

                </div>
        </div>
    </div>
</section>

<!-- Join Now Section -->
<section id="joinNow-section" class="py-16 text-white">
    <div class="max-w-[1200px] mx-auto px-5">
        <div class="flex flex-col items-center justify-center">
            <div class="relative z-10 md:flex justify-between items-center gap-28 max-w-[1200px] md:px-6 ">
                <div class="relative mx-auto md:left-0 my-10 w-[180px] h-[195px] ease-in-out duration-300 hover:scale-110">
                    <div class="absolute -bottom-4 -left-6 w-[237px] h-[80px]">
                        <img alt="Shadow" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/sombra_da_carruagem.png') }}"/>
                    </div>
                    <img alt="Carruagem" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/carruagem.png') }}"/>
                    <div class="absolute -bottom-5 -left-10 w-[109px] h-[110px]">
                    <img alt="Pecopecos" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/pecopecos.gif') }}"/>
                    </div>
                    <div class="absolute -bottom-3 left-44 w-[57px] h-[101px] -scale-x-100">
                        <img alt="NPC Guys" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/KC_charioteer.gif') }}"/>
                    </div>
                    <div class="absolute bottom-20 left-48 w-[74px] h-[69px]">
                        <img alt="Join Now" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/join_now3.gif') }}"/>
                    </div>
                </div>
                <div class="flex flex-col gap-6 max-w-[450px] md:max-w-[450px] items-center md:items-start">
                    <h1 class="text-6xl md:text-7xl font-core md:text-left"><span class="text-brand-main">A CLASSIC MODERN<!-- --> <span class="text-[#F6BF96]">ADVENTURE</span></h1>
                    <div class="flex flex-col-2 md:flex-row gap-4 justify-between ">
                        <a href="{{ url('/download') }}" class="w-full">
                            <button class="transition-fg relative inline-flex items-center justify-center overflow-hidden rounded-md outline-none disabled:bg-ui-bg-disabled disabled:border-ui-border-base disabled:text-ui-fg-disabled disabled:!shadow-none disabled:after:hidden after:absolute after:inset-0 after:content-[&#x27;&#x27;] shadow-buttons-colored text-ui-fg-on-inverted border-ui-border-loud after:button-inverted-gradient hover:after:button-inverted-hover-gradient active:after:button-inverted-pressed-gradient focus:!shadow-buttons-colored-focus txt-compact-small-plus gap-x-1 bg-brand-red p-3 hover:bg-slate-300 active:bg-slate-300 border-0 w-full md:w-fit whitespace-nowrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.056 9.944v1.334c0 .982-.796 1.778-1.778 1.778H3.722a1.777 1.777 0 0 1-1.778-1.778V9.944M4.389 5.5 7.5 8.611 10.611 5.5M7.5 8.611V1.944"></path>
                                </svg> Download
                            </button>
                        </a>
                        <a href="{{ url('/account') }}" class="w-full">
                            <button class="transition-fg relative inline-flex items-center justify-center overflow-hidden rounded-md outline-none disabled:bg-ui-bg-disabled disabled:border-ui-border-base disabled:text-ui-fg-disabled disabled:!shadow-none disabled:after:hidden after:absolute after:inset-0 after:content-[&#x27;&#x27;] shadow-buttons-colored text-ui-fg-on-inverted border-ui-border-loud after:button-inverted-gradient hover:after:button-inverted-hover-gradient active:after:button-inverted-pressed-gradient focus:!shadow-buttons-colored-focus txt-compact-small-plus gap-x-1 bg-brand-red p-3 hover:bg-[#ED7780CF] active:bg-brand-red border-0 w-full md:w-fit whitespace-nowrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.5 5.944a2.444 2.444 0 0 0 0-4.888 2.444 2.444 0 0 0 0 4.888M11.733 13.292c.764-.24 1.166-1.085.842-1.818A5.55 5.55 0 0 0 7.5 8.167a5.55 5.55 0 0 0-5.075 3.307c-.324.733.078 1.577.842 1.818a14.1 14.1 0 0 0 8.466 0"></path>
                                </svg> Sign up
                            </button>
                        </a>
                        <a href="https://discord.gg/mythofyggdrasil" target="_blank" rel="noreferrer" class="w-full">
                            <button class="transition-fg relative inline-flex items-center justify-center overflow-hidden rounded-md outline-none disabled:bg-ui-bg-disabled disabled:border-ui-border-base disabled:text-ui-fg-disabled disabled:!shadow-none disabled:after:hidden after:absolute after:inset-0 after:content-[&#x27;&#x27;] shadow-buttons-colored text-ui-fg-on-inverted border-ui-border-loud after:button-inverted-gradient hover:after:button-inverted-hover-gradient active:after:button-inverted-pressed-gradient focus:!shadow-buttons-colored-focus txt-compact-small-plus gap-x-1 bg-brand-red p-3 hover:bg-[#ED7780CF] active:bg-brand-red border-0 w-full md:w-fit whitespace-nowrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none">
                                    <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" clip-path="url(#a)">
                                        <path d="M7.722 5.056h4.89c.735 0 1.332.597 1.332 1.333v4c0 .736-.597 1.333-1.333 1.333h-.444v2.223l-2.445-2.223h-2A1.334 1.334 0 0 1 6.39 10.39v-4c0-.736.597-1.333 1.333-1.333"></path>
                                        <path d="M10.11 2.833A1.78 1.78 0 0 0 8.39 1.5H2.833c-.982 0-1.777.796-1.777 1.778v4.445c0 .981.796 1.778 1.777 1.777v2.667l1.334-1.455"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="a">
                                            <clipPath id="a">
                                                <path fill="#fff" d="M0 0h15v15H0z"></path>
                                            </clipPath>
                                        </clipPath>
                                    </defs>
                                </svg> Join Community
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16">
    <div class="max-w-[1200px] mx-auto px-5">
        <div class="flex flex-col md:flex-row items-center justify-center gap-10 mb-20 md:gap-40 mt-5 px-12 max-w-[1200px] mx-auto">
            <div class="w-full md:w-1/2 order-2 md:order-1 z-0">
                <div class="space-y-6">
                    <div class="border border-gray-300 rounded-lg shadow-sm mb-4 bg-white overflow-hidden">
                        <button class="faq-button w-full text-left p-3 font-black text-brand-main flex justify-between items-center">
                            <span class="font-robotoCond text-l">What is Myth of Yggdrasil</span>
                            <span class="faq-icon text-l">+</span>
                        </button>
                        <div class="grid transition-all duration-500 ease-in-out grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden px-4 pb-0 text-start">
                                <div class="prose prose-lg max-w-none">
                                    <p class="text-lg font-robotoCond leading-7 my-4">Myth of Yggdrasil is an MMORPG adapted by players who, like you, grew up in virtual worlds and found genuine connections and memorable experiences. Inspired by the classics of the genre, we aim to reinterpret this journey by introducing modern mechanics that enhance the freedom of character building, strategy, and customization.</p>
                                    <p class="text-lg font-robotoCond leading-7 my-4">More than just a game, Myth of Yggdrasil is an independent project that strives to grow in its own way while evolving alongside its community. Our goal is to build a universe that respects the roots of MMORPGs while adapting to modern times, offering a dynamic and welcoming world for everyone who wants to be part of this story.</p>
                                    <p class="text-lg font-robotoCond leading-7 my-4">We want to share this experience not only with veteran players but also with new generations who will discover themselves in this universe.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-300 rounded-lg shadow-sm mb-4 bg-white overflow-hidden">
                        <button class="faq-button w-full text-left p-3 font-black text-brand-main flex justify-between items-center">
                            <span class="font-robotoCond text-l">Who is behind Myth?</span>
                            <span class="faq-icon text-l">+</span>
                        </button>
                        <div class="grid transition-all duration-500 ease-in-out grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden px-4 pb-0 text-start">
                                <div class="prose prose-lg max-w-none">
                                    <p class="text-lg font-robotoCond leading-7 my-4">Myth Team is made up of players and developers who have been working together for over three years to create something special. Our goal has always been to transform a classic into a modern experience, respecting its roots while exploring new possibilities.</p>
                                    <p class="text-lg font-robotoCond leading-7 my-4">Myth of Yggdrasil is our first project, born from a journey of learning and collaboration. More than just a game, it's the beginning of a studio that aims to create its own worlds and grow alongside the community.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-300 rounded-lg shadow-sm mb-4 bg-white overflow-hidden">
                        <button class="faq-button w-full text-left p-3 font-black text-brand-main flex justify-between items-center">
                            <span class="font-robotoCond text-l">Is there any trade using real money?</span>
                            <span class="faq-icon text-l">+</span>
                        </button>
                        <div class="grid transition-all duration-500 ease-in-out grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden px-4 pb-0 text-start">
                                <div class="prose prose-lg max-w-none">
                                    <p class="text-lg font-robotoCond leading-7 my-4">Yes, however, the Myth Team values progress achieved within the game. The primary way to evolve your character is by playing, accumulating Zeny, and exploring the world.</p>
                                    <p class="text-lg font-robotoCond leading-7 my-4">For players who wish to share rare achievements, we created the Treasures Bazaar – a safe and regulated space where collectors can sell specific equipment directly to other players. To do so, you must be a Collector (a verified Brazillian seller account), ensuring security and transparency.</p>
                                    <p class="text-lg font-robotoCond leading-7 my-4">The Treasures Bazaar is not a requirement to progress in the game, but rather an option for those who value the freedom to trade their treasures.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-300 rounded-lg shadow-sm mb-4 bg-white overflow-hidden">
                        <button class="faq-button w-full text-left p-3 font-black text-brand-main flex justify-between items-center">
                            <span class="font-robotoCond text-l">Where can I find more information about the game?</span>
                            <span class="faq-icon text-l">+</span>
                        </button>
                        <div class="grid transition-all duration-500 ease-in-out grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden px-4 pb-0 text-start">
                                <div class="prose prose-lg max-w-none">
                                    <p class="text-lg font-robotoCond leading-7 my-4">Myth of Yggdrasil was designed to welcome its players. All the necessary information is available within the game: through the Omnibook, you can access details about monsters and items, while NPCs in the world keep you updated on systems and features. Everything you need is within the Myth universe itself.</p>
                                    <p class="text-lg font-robotoCond leading-7 my-4">For news and external communication, visit our news section on the website and join our Discord community, where you can interact with other players and stay up-to-date with Myth Team announcements.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-300 rounded-lg shadow-sm mb-4 bg-white overflow-hidden">
                        <button class="faq-button w-full text-left p-3 font-black text-brand-main flex justify-between items-center">
                            <span class="font-robotoCond text-l">How can I contact the Myth Team?</span>
                            <span class="faq-icon text-l">+</span>
                        </button>
                        <div class="grid transition-all duration-500 ease-in-out grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden px-4 pb-0 text-start">
                                <div class="prose prose-lg max-w-none">
                                    <p class="text-lg font-robotoCond leading-7 my-4">To contact the Myth Team directly, please use the support ticket system.</p>
                                    <p class="text-lg font-robotoCond leading-7 my-4">While we closely follow the community and maintain a safe distance to ensure the integrity of the project, our moderators are active within the community for general interactions. The development team remains focused on maintaining and evolving the world.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-300 rounded-lg shadow-sm mb-4 bg-white overflow-hidden">
                        <button class="faq-button w-full text-left p-3 font-black text-brand-main flex justify-between items-center">
                            <span class="font-robotoCond text-l">How can I report a bug or issue?</span>
                            <span class="faq-icon text-l">+</span>
                        </button>
                        <div class="grid transition-all duration-500 ease-in-out grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden px-4 pb-0 text-start">
                                <div class="prose prose-lg max-w-none">
                                    <p class="text-lg font-robotoCond leading-7 my-4">The best way to help us improve Myth of Yggdrasil is by reporting directly through our ticket system. Just visit the official website or our community Discord to open a ticket with the details. Your contribution makes a big difference in enhancing the experience for all players!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border border-gray-300 rounded-lg shadow-sm mb-4 bg-white overflow-hidden">
                        <button class="faq-button w-full text-left p-3 font-black text-brand-main flex justify-between items-center">
                            <span class="font-robotoCond text-l">What are the benefits of creating content for Myth?</span>
                            <span class="faq-icon text-l">+</span>
                        </button>
                        <div class="grid transition-all duration-500 ease-in-out grid-rows-[0fr] opacity-0">
                            <div class="overflow-hidden px-4 pb-0 text-start">
                                <div class="prose prose-lg max-w-none">
                                    <p class="text-lg font-robotoCond leading-7 my-4">Content creators have a special role in the Myth of Yggdrasil community! Besides helping spread the word about the game, you can earn recognition, exclusive rewards, and even Ygg Points by participating in official events and campaigns. It's a way to share your passion while supporting the growth of Myth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex flex-col items-center justify-center gap-5 md:-ml-[25%] order-1 md:order-2">
                <div class="flex flex-col -ml-[10%] items-start">
                    <h3 class="font-core -mb-3 md:-mb-4 ml-1 text-lg md:text-xl">WHAT THE</h3>
                    <h1 class="text-6xl md:text-7xl font-core">FAQ?!</h1>
                </div>
                <div class="relative w-[118px] h-[101px]">
                    <img alt="Group of People" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/faq.png') }}"/>
                    <div class="absolute -top-3 -left-6 w-[37px] h-[38px]">
                        <img alt="Emoji" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/faq_emote.gif') }}"/>
                    </div>
                    <div class="absolute -top-4 right-12 w-[38px] h-[32px]">
                        <img alt="Emoji" loading="lazy" decoding="async" data-nimg="fill" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" src="{{ asset('img/faq_emote2.gif') }}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // FAQ accordion functionality
        const faqButtons = document.querySelectorAll('.faq-button');
        
        faqButtons.forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('.faq-icon');
                
                if (content.classList.contains('grid-rows-[0fr]')) {
                    content.classList.remove('grid-rows-[0fr]', 'opacity-0');
                    content.classList.add('grid-rows-[1fr]', 'opacity-100');
                    icon.textContent = '−';
                } else {
                    content.classList.remove('grid-rows-[1fr]', 'opacity-100');
                    content.classList.add('grid-rows-[0fr]', 'opacity-0');
                    icon.textContent = '+';
                }
            });
        });
    });
</script>
@endsection
