@extends('layouts.app')

@section('title', $news->title)

@section('content')
 <!-- Detail Artikel -->
  <div class="flex flex-col px-4 lg:px-14 mt-10">
    <div class="font-bold text-xl lg:text-2xl mb-6 text-center lg:text-left">
      <p class="mb-10 text-center">{{ $news->title }}</p>
    </div>
    <div class="flex flex-col lg:flex-row w-full gap-10">
      <!-- Artikel Utama -->
      <div class="lg:w-8/12">
        <img src="{{ asset('storage/' . $news->thumbnail) }}" alt="Artikel Utama" class="w-full max-h-96 rounded-xl object-cover">
        <p class="mt-10 font-normal"> {!! $news->content !!}</p>   
      </div>
      <!-- Artikel Lainnya -->
      <div class="lg:w-4/12 flex flex-col gap-10">
        <div class="sticky top-24 z-40">
          <p class="font-bold mb-8 text-xl lg:text-xl">Baca Lainnya Juga</p>
          <!-- Artikel Card -->
          <div class=" gap-5 flex flex-col">
            @foreach ($newests as $new)
               <a href="{{ route('news.show', $new->slug) }}">
              <div class="flex gap-3 border border-slate-300 hover:border-warning p-3 rounded-xl">
                <div class="bg-warning text-white rounded-full w-fit px-5 py-1 ml-2 mt-2 font-normal text-xs absolute">
                  {{ $new->newsCategory->title }}
                </div>
                <div class="flex gap-3 flex-col lg:flex-row">
                  <img src=" {{ asset('storage/' . $new->thumbnail) }}" alt="" class="max-h-36 rounded-xl object-cover" style="width: 150px; object-fit: cover;">
                  <div class="">
                    <p class="font-bold text-sm lg:text-base">{{ $new->title }}</p>
                    <p class="text-slate-400 mt-2 text-sm lg:text-xs">{!! \Str::limit($new->content, 40) !!} </p>
                  </div>
                </div>
              </div>
            </a>  
            @endforeach

          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Author Section -->
  <div class="flex flex-col gap-4 mb-10 p-4 lg:p-10 lg:px-14 w-full lg:w-2/3">
    <p class="font-semibold text-xl lg:text-2xl mb-2">Author</p>
    <a href="author.html">
      <div
        class="flex flex-col lg:flex-row gap-4 items-center border border-slate-300 rounded-xl p-6 lg:p-8 hover:border-warning transition">
        <img src="{{ asset('storage/' . $news->author->avatar) }}" alt="profile" class="rounded-full w-24 lg:w-28 border-2 border-warning">
        <div class="text-center lg:text-left">
          <p class="font-bold text-lg lg:text-xl">{{ $news->author->name }}</p>
          <p class="text-sm lg:text-base leading-relaxed">
                {{ \Str::limit($news->author->bio, 100) }}
          </p>
        </div>
      </div>
    </a>
  </div>
@endsection