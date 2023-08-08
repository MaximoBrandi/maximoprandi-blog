{{--Used on the index page (so shows a small summary--}}
{{--See the guide on binshops.com for how to copy these files to your /resources/views/ directory--}}

<div class="border-b border-grey-lighter pb-8">
    <a href="{{str_replace( '?' , '/' , ($post->url($locale, true)) )}}"
        class="block font-body text-lg font-semibold text-primary transition-colors hover:text-green dark:text-white dark:hover:text-secondary">{{$post->title}}
    </a>
    <span class="block text-sm text-primary dark:text-white">{{$post->subtitle}}</span>
    <div class="flex items-center pt-4">
        <p class="pr-2 font-body font-light text-primary dark:text-white">
            {{date('d M Y ', strtotime($post->post->posted_at))}}
        </p>
        <span class="font-body text-grey dark:text-white">//</span>
        <p class="pl-2 font-body font-light text-primary dark:text-white">
            4 min read
        </p>
    </div>
</div>
