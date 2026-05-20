<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MS News</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 antialiased">
    <header x-data="{ showDemoModal: false }" class="border-b border-gray-200 sticky top-0 bg-white z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6 border-b border-gray-100">
                <div class="flex items-center space-x-4">
                    <button class="text-gray-600 hover:text-black cursor-pointer">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                    <button class="text-gray-600 hover:text-black hidden sm:block cursor-pointer">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                </div>
                
                <a href="/" class="text-3xl font-bold tracking-widest font-serif text-center">MS NEWS</a>
                
                <div>
                    <button @click="showDemoModal = true" class="bg-blue-600 text-white px-4 py-2 text-sm font-semibold rounded hover:bg-blue-700 transition cursor-pointer">
                        Demo
                    </button>
                </div>
            </div>

            <nav class="flex space-x-6 py-4 text-xs font-medium uppercase tracking-wider overflow-x-auto whitespace-nowrap justify-center">
                <a href="#" class="text-black border-b border-black pb-1">Home</a>
                <a href="#" class="text-gray-500 hover:text-black">Technology</a>
                <a href="#" class="text-gray-500 hover:text-black">Business</a>
                <a href="#" class="text-gray-500 hover:text-black">Politics</a>
                <a href="#" class="text-gray-500 hover:text-black">Travel</a>
                <a href="#" class="text-gray-500 hover:text-black">Food</a>
                <a href="#" class="text-gray-500 hover:text-black">Culture</a>
                <a href="#" class="text-gray-500 hover:text-black">Opinion</a>
                <a href="#" class="text-gray-500 hover:text-black">Lifestyle</a>
            </nav>
        </div>

        <div 
          class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-xs transition-opacity duration-300"
          x-show="showDemoModal"
          x-transition:enter="transition ease-out duration-300"
          x-transition:enter-start="opacity-0"
          x-transition:enter-end="opacity-100"
          x-transition:leave="transition ease-in duration-200"
          x-transition:leave-start="opacity-100"
          x-transition:leave-end="opacity-0"
          @click.self="showDemoModal = false"
          style="display: none;"
        >
          <div 
            class="bg-white border border-gray-200 max-w-lg w-full mx-5 p-6 rounded-2xl shadow-2xl transform transition-transform duration-300"
            x-show="showDemoModal"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="scale-95"
            x-transition:enter-end="scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="scale-100"
            x-transition:leave-end="scale-95"
          >
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-gray-900 font-serif flex items-center gap-2">
                    <span class="w-6 h-6 bg-blue-600 rounded-full text-xs flex items-center justify-center text-white font-sans font-bold">i</span>
                    Informasi Akses Demo
                </h3>
            </div>
            
            <div class="space-y-4 text-sm text-gray-600">
                <p>Terima kasih telah tertarik dengan platform <strong class="text-gray-900">MS NEWS</strong>.</p>
                <p>Anda dapat mencoba masuk ke sistem adminstrator menggunakan tautan <a href="https://news.msroot.my.id/login" target="_blank" class="text-blue-600 font-semibold underline hover:text-blue-800">news.msroot.my.id/login</a> dengan kredensial berikut:</p>
                
                <div class="bg-gray-50 border border-gray-200 p-4 rounded-xl space-y-3 font-mono text-xs text-gray-800">
                    <div>
                        <span class="text-blue-600 font-semibold">Email :</span> 
                        <span class="px-1.5 py-0.5 rounded select-all font-bold">admin@example.com</span>
                    </div>
                    <div>
                        <span class="text-blue-600 font-semibold">Password :</span> 
                        <span class="px-1.5 py-0.5 rounded select-all font-bold">password</span>
                    </div>
                </div>

                <p>Bila menemui kendala pengujian atau memerlukan bantuan teknis, Anda dapat menghubungi kami melalui tautan <a href="https://msroot.my.id" target="_blank" class="text-blue-600 font-semibold underline hover:text-blue-800 transition-colors">msroot.my.id</a>.</p>

                <div class="text-[11px] text-gray-400 italic">
                    * Harap gunakan kredensial demo ini dengan bijak hanya untuk keperluan evaluasi antarmuka atau fungsi sistem.
                </div>
            </div>
            
            <div class="mt-6 flex justify-end">
                <button 
                  @click="showDemoModal = false" 
                  class="px-4 py-2.5 bg-gray-900 hover:bg-gray-800 text-white rounded-lg text-xs font-semibold uppercase tracking-wider transition-all cursor-pointer"
                >
                    Tutup
                </button>
            </div>
          </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <section class="grid grid-cols-1 lg:grid-cols-4 gap-8 pb-12 border-b border-gray-200">
            <div class="space-y-8 lg:col-span-1">
                <article class="space-y-3">
                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=500" alt="Books" class="w-full aspect-[4/3] object-cover">
                    <span class="text-[10px] uppercase tracking-widest font-bold text-blue-600 block">Books</span>
                    <h3 class="font-serif text-xl font-bold leading-tight"><a href="#" class="hover:text-blue-600">Hero-Half Post Example</a></h3>
                    <p class="text-xs text-gray-400">January 8, 2025</p>
                </article>

                <article class="space-y-3 pt-4 border-t border-gray-100">
                    <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?w=500" alt="Man with Horse" class="w-full aspect-[4/3] object-cover">
                    <span class="text-[10px] uppercase tracking-widest font-bold text-blue-600 block">Books · Politics</span>
                    <h3 class="font-serif text-xl font-bold leading-tight"><a href="#" class="hover:text-blue-600">I decided to move out of the house</a></h3>
                    <p class="text-xs text-gray-400">January 8, 2025</p>
                </article>
            </div>

            <div class="lg:col-span-2 text-center space-y-4">
                <article>
                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=800" alt="Featured Portrait" class="w-full aspect-[4/3] object-cover mb-4">
                    <span class="text-[10px] uppercase tracking-widest font-bold text-blue-600 block mb-2">Opinion</span>
                    <h2 class="font-serif text-3xl sm:text-4xl font-bold leading-tight max-w-xl mx-auto">
                        <a href="#" class="hover:text-blue-600">When you tell them the truth</a>
                    </h2>
                    <p class="text-sm text-gray-500 max-w-lg mx-auto my-3 leading-relaxed">
                        Ei mei scripta intellegat. Verear voluptaria eam at, consul putent eu vel. Pro saepe maluisset ne, audire maiorum forensibus eos et.
                    </p>
                    <div class="text-xs text-gray-400">
                        <span>January 8, 2025</span> <span class="mx-2">•</span> <span>Isabella and Lucas</span>
                    </div>
                </article>
            </div>

            <div class="lg:col-span-1 space-y-6">
                <h4 class="text-xs font-bold uppercase tracking-widest border-b border-black pb-2 mb-4">Latest</h4>
                
                @php
                    // Data dummy untuk simulasi loop blade
                    $latest_posts = [
                        ['title' => 'This is my 2024 unwrapped', 'img' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=150'],
                        ['title' => 'Rebel Wilson weds Ramona Agruma in Sydney', 'img' => 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?w=150'],
                        ['title' => 'When you tell them the truth', 'img' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=150'],
                        ['title' => 'Hero-Half Post Example', 'img' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=150'],
                    ];
                @endphp

                @foreach($latest_posts as $post)
                <div class="flex space-x-3 items-start justify-between border-b border-gray-100 pb-4">
                    <div class="space-y-1">
                        <h5 class="font-bold text-sm leading-tight font-serif"><a href="#" class="hover:text-blue-600">{{ $post['title'] }}</a></h5>
                        <p class="text-[11px] text-gray-400">January 8, 2025</p>
                    </div>
                    <img src="{{ $post['img'] }}" class="w-16 h-16 object-cover bg-gray-100" alt="thumb">
                </div>
                @endforeach
            </div>
        </section>


        <section class="py-12 border-b border-gray-200">
            <div class="flex justify-between items-baseline mb-6">
                <h2 class="text-xs font-bold uppercase tracking-widest text-black">Business</h2>
                <a href="#" class="text-xs text-blue-600 hover:underline">View all &raquo;</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <article class="space-y-2">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=400" class="w-full aspect-[4/3] object-cover" alt="biz">
                    <span class="text-[10px] uppercase tracking-widest font-bold text-blue-600 block">Business</span>
                    <h4 class="font-serif font-bold text-base"><a href="#">I'm a high school graduate</a></h4>
                    <p class="text-xs text-gray-400">January 8, 2025</p>
                    <p class="text-xs text-gray-500 line-clamp-2">Quo natum nemore putant in, his te case habemus. Nulla detraxit explicari.</p>
                </article>
                <article class="space-y-2">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=400" class="w-full aspect-[4/3] object-cover" alt="biz">
                    <span class="text-[10px] uppercase tracking-widest font-bold text-blue-600 block">Business</span>
                    <h4 class="font-serif font-bold text-base"><a href="#">My entrance exam was on a book of matches</a></h4>
                    <p class="text-xs text-gray-400">January 8, 2025</p>
                    <p class="text-xs text-gray-500 line-clamp-2">Ei mei scripta intellegat. Verear voluptaria eam at, consul putent.</p>
                </article>
                <article class="space-y-2">
                    <img src="https://images.unsplash.com/photo-1513828583835-c527ebc50322?w=400" class="w-full aspect-[4/3] object-cover" alt="biz">
                    <span class="text-[10px] uppercase tracking-widest font-bold text-blue-600 block">Business · Interview</span>
                    <h4 class="font-serif font-bold text-base"><a href="#">My name is Rhoda Morgenstern</a></h4>
                    <p class="text-xs text-gray-400">January 8, 2025</p>
                    <p class="text-xs text-gray-500 line-clamp-2">Lorem ipsum dolor sit amet, ei officiis assueverit pri, duo volumus commune.</p>
                </article>
                <article class="space-y-2">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=400" class="w-full aspect-[4/3] object-cover" alt="biz">
                    <span class="text-[10px] uppercase tracking-widest font-bold text-blue-600 block">Business</span>
                    <h4 class="font-serif font-bold text-base"><a href="#">Tonight what heights we'll hit, on with the show</a></h4>
                    <p class="text-xs text-gray-400">January 8, 2025</p>
                    <p class="text-xs text-gray-500 line-clamp-2">Labores incorrupte vim an. Id augue populo alienum usu, has harum.</p>
                </article>
            </div>
        </section>


        <section class="py-12 border-b border-gray-200">
            <div class="flex justify-between items-baseline mb-6">
                <h2 class="text-xs font-bold uppercase tracking-widest text-black">Travel</h2>
                <a href="#" class="text-xs text-blue-600 hover:underline">View all &raquo;</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <article class="space-y-2">
                    <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?w=400" class="w-full aspect-[4/3] object-cover" alt="travel">
                    <span class="text-[10px] uppercase tracking-widest font-bold text-blue-600 block">Travel</span>
                    <h4 class="font-serif font-bold text-base"><a href="#">The first thing I remember liking back was food</a></h4>
                    <p class="text-xs text-gray-400">January 8, 2025</p>
                    <p class="text-xs text-gray-500 line-clamp-2">Ius ea rebum nostrum offendit. Per in recusabo facilisis, est ei choro.</p>
                </article>
                <article class="space-y-2">
                    <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=400" class="w-full aspect-[4/3] object-cover" alt="travel">
                    <span class="text-[10px] uppercase tracking-widest font-bold text-blue-600 block">Travel</span>
                    <h4 class="font-serif font-bold text-base"><a href="#">Last Trip to Pakistan</a></h4>
                    <p class="text-xs text-gray-400">January 8, 2025</p>
                    <p class="text-xs text-gray-500 line-clamp-2">Justo fabulas singulis at pri, saepe luptatum mei an. Duo idque solet.</p>
                </article>
                <article class="space-y-2">
                    <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=400" class="w-full aspect-[4/3] object-cover" alt="travel">
                    <span class="text-[10px] uppercase tracking-widest font-bold text-blue-600 block">Travel</span>
                    <h4 class="font-serif font-bold text-base"><a href="#">Post Gallery - Slider</a></h4>
                    <p class="text-xs text-gray-400">January 8, 2025</p>
                    <p class="text-xs text-gray-500 line-clamp-2">Patrioque assentior ea vim. Volutpat salutandi ex his, cu sea soluta melius.</p>
                </article>
                <article class="space-y-2">
                    <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?w=400" class="w-full aspect-[4/3] object-cover" alt="travel">
                    <span class="text-[10px] uppercase tracking-widest font-bold text-blue-600 block">Travel</span>
                    <h4 class="font-serif font-bold text-base"><a href="#">We vote for our rights</a></h4>
                    <p class="text-xs text-gray-400">January 8, 2025</p>
                    <p class="text-xs text-gray-500 line-clamp-2">Hey there. This is an excerpt.</p>
                </article>
            </div>
        </section>


        <section class="py-12">
            <div class="flex justify-between items-baseline mb-6">
                <h2 class="text-xs font-bold uppercase tracking-widest text-black">Politics</h2>
                <a href="#" class="text-xs text-blue-600 hover:underline">View all &raquo;</a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 space-y-4">
                    <article>
                        <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?w=900" class="w-full aspect-[16/10] object-cover mb-4" alt="Big Politics">
                        <span class="text-[10px] uppercase tracking-widest font-bold text-blue-600 block">Books · Politics</span>
                        <h3 class="font-serif text-2xl sm:text-3xl font-bold mt-1 mb-2"><a href="#">I decided to move out of the house</a></h3>
                        <p class="text-xs text-gray-500 leading-relaxed mb-3">
                            Labores incorrupte vim an. Id augue populo alienum usu, has harum consectetuer ne, ne clita fuisset dignissim quo. Semper oportere assueverit eum eu. Ex facilisi dignissim vituperata mei, ad noluisse assueverit est. Nam no dico quas delectus.
                        </p>
                        <div class="flex items-center space-x-2 text-xs text-gray-400">
                            <span>January 8, 2025</span>
                            <span>•</span>
                            <span class="text-black font-medium">by Lucas</span>
                        </div>
                    </article>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 lg:col-span-1">
                    <article class="space-y-2">
                        <img src="https://images.unsplash.com/photo-1541872703-74c5e44368f9?w=300" class="w-full aspect-square object-cover" alt="pol">
                        <span class="text-[10px] uppercase tracking-widest font-bold text-blue-600 block">Politics</span>
                        <h5 class="font-serif font-bold text-sm leading-tight"><a href="#">New York, this is your last chance</a></h5>
                        <p class="text-[11px] text-gray-400">January 8, 2025</p>
                    </article>

                    <article class="space-y-2">
                        <img src="https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?w=300" class="w-full aspect-square object-cover" alt="pol">
                        <span class="text-[10px] uppercase tracking-widest font-bold text-blue-600 block">Politics</span>
                        <h5 class="font-serif font-bold text-sm leading-tight"><a href="#">Helping to Protect the Okavango Basin</a></h5>
                        <p class="text-[11px] text-gray-400">January 8, 2025</p>
                    </article>

                    <article class="space-y-2">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=300" class="w-full aspect-square object-cover" alt="pol">
                        <span class="text-[10px] uppercase tracking-widest font-bold text-blue-600 block">Politics</span>
                        <h5 class="font-serif font-bold text-sm leading-tight"><a href="#">An Old Man Telling Me about Wars</a></h5>
                        <p class="text-[11px] text-gray-400">January 8, 2025</p>
                    </article>

                    <article class="space-y-2">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=300" class="w-full aspect-square object-cover" alt="pol">
                        <span class="text-[10px] uppercase tracking-widest font-bold text-blue-600 block">Opinion · Politics</span>
                        <h5 class="font-serif font-bold text-sm leading-tight"><a href="#">Enter at your peril, past the vault door</a></h5>
                        <p class="text-[11px] text-gray-400">January 8, 2025</p>
                    </article>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-gray-50 border-t border-gray-200 py-8 mt-12 text-center text-xs text-gray-400">
        <p>&copy; {{ date('Y') }} MS NEWS. All rights reserved.</p>
    </footer>

</body>
</html>