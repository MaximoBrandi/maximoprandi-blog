@extends("layouts.app",['title'=>$title])

@section("content")

    <div class='col-sm-12 binshopsblog_container'>

        <div class="container mx-auto">
            <div class="pb-16 lg:pb-20 pt-6 lg:pt-10">
                <div class="pt-8">

                    @forelse($posts as $post)
                        @include("binshopsblog::partials.index_loop")
                    @empty
                        <div class="col-md-12">
                            <div class='alert alert-danger'>No posts!</div>
                        </div>
                    @endforelse
                </div>
            </div>

        </div>
    </div>

@endsection
