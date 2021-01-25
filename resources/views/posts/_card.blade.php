{{--
  Variable disponible
    - $post obj
 --}}
         <div class="col-md-6 d-flex ftco-animate">
           <div class="blog-entry justify-content-end">
             <a href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}" class="block-20" style="background-image: url('{{ asset('assets/images/' . $post->image) }}');">
             </a>
             <div class="text p-4 float-right d-block">
               <div class="topper d-flex align-items-center">
                 <div class="one py-2 pl-3 pr-1 align-self-stretch">
                   <span class="day">{{ \Carbon\Carbon::parse($post->created_at)->format('d') }}</span>
                 </div>
                 <div class="two pl-0 pr-3 py-2 align-self-stretch">
                   <span class="yr">{{ \Carbon\Carbon::parse($post->created_at)->format('Y') }}</span>
                   <span class="mos">{{ \Carbon\Carbon::parse($post->created_at)->format('F') }}</span>
                 </div>
               </div>
               <h3 class="heading mb-3"><a href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}">{{ $post->title }}</a></h3>
               <p>{{ $post->resume }}</p>
               <p><a href="{{ route('posts.show', ['post' => $post->id, 'slug' => Str::slug($post->title, '-')]) }}" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
             </div>
           </div>
         </div>

