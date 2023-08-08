<div>
    <div class="container mx-auto">
        <div class="pt-16 lg:pt-20">
            <div class="border-b border-grey-lighter pb-8 sm:pb-12">
                <h2
                    class="block font-body text-3xl font-semibold leading-tight text-primary dark:text-white sm:text-4xl md:text-5xl">
                    {{ $post->title }}
                </h2>
                <div class="flex items-center pt-5 sm:pt-8">
                    <p class="pr-2 font-body font-light text-primary dark:text-white">
                        {{ $post->post->posted_at->diffForHumans() }}
                    </p>
                    <span class="vdark:text-white font-body text-grey">//</span>
                    <p class="pl-2 font-body font-light text-primary dark:text-white">
                        4 min read
                    </p>
                </div>
            </div>
            <div
                class="blog_body_content prose prose max-w-none border-b border-grey-lighter py-8 dark:prose-dark sm:py-12">

                <p>{!! $post->post_body_output() !!}</p>

            </div>

            <div class="flex items-center py-10">
                <span class="pr-5 font-body font-medium text-primary dark:text-white">Share</span>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}};src=sdkpreparse" target="_blank" class="fb-xfbml-parse-ignore">
                    <i
                        class="bx bxl-facebook text-2xl text-primary transition-colors hover:text-secondary dark:text-white dark:hover:text-secondary"></i></a>
                <a href="https://twitter.com/intent/tweet?text={{Request::url()}}" target="_blank">
                    <i
                        class="bx bxl-twitter pl-2 text-2xl text-primary transition-colors hover:text-secondary dark:text-white dark:hover:text-secondary"></i>
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{Request::url()}}">
                    <i
                        class="bx bxl-linkedin pl-2 text-2xl text-primary transition-colors hover:text-secondary dark:text-white dark:hover:text-secondary"></i></a>
                <a href="https://reddit.com/submit?url={{Request::url()}}&title={{urlencode($post->title)}}">
                    <i
                        class="bx bxl-reddit pl-2 text-2xl text-primary transition-colors hover:text-secondary dark:text-white dark:hover:text-secondary"></i></a>
            </div>
        </div>
    </div>
</div>
