@section('title')
    {{ $post->title }}
@endsection
@section('favicon')
    {{ asset('img/' . $post->img) }}
@endsection
@extends('masterClient')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/blog">Blog</a></li>
            </ol>
            <h2>Blog</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="{{ asset('img/' . $post->img) }}" alt="{{ $post->title }}" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            {{ $post->title }}
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="blog-single.html">{{ $post->user->name }}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="blog-single.html"><time
                                            datetime="{{ $post->created_at->format('Y-m-d') }}">{{ $post->created_at->format('d M, Y') }}</time></a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="blog-single.html">{{ $post->comments->count() }} Comments</a></li>
                                <li class="d-flex align-items-center"><i class="fa-solid fa-floppy-disk"></i> <a
                                        href="blog-single.html">{{ $post->category->title }}</a></li>
                                <li class="d-flex align-items-center"><i class="fa-regular fa-eye"></i> <a
                                        href="blog-single.html">Dilihat: {{ $post->views }} kali </a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                {!! $post->content !!}
                            </p>


                            {{-- <blockquote>
                      <p>
                        Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                      </p>
                    </blockquote> --}}

                        </div>

                        <div class="entry-footer">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#">Business</a></li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>

                    </article><!-- End blog entry -->

                    <div class="blog-comments blog-author">

                        <h4 class="comments-count">{{ $post->comments->count() }} Comments</h4>

                        <div id="comment-1" class="comment">
                            <div class="">
                                {{-- <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div> --}}
                                @foreach ($post->comments as $item)
                                    <div>
                                        <h5><a href="#">{{ $item->name }}</a> <a href="#" class="reply"></a>
                                        </h5>
                                        <p class="text-black">
                                            " {{ $item->comment }} "
                                        </p>
                                        <time style="font-size: 10px;" class="mt-0 mb-3"
                                            datetime="{{ $item->created_at->format('Y-m-d') }}">{{ $item->created_at->format('d M, Y') }}</time>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{--     
                  <div id="comment-2" class="comment">
                    <div class="d-flex">
                      <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
                      <div>
                        <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan, 2020</time>
                        <p>
                          Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                        </p>
                      </div>
                    </div>
    
                    <div id="comment-reply-1" class="comment comment-reply">
                      <div class="d-flex">
                        <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
                        <div>
                          <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                          <time datetime="2020-01-01">01 Jan, 2020</time>
                          <p>
                            Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.
    
                            Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.
    
                            Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                          </p>
                        </div>
                      </div>
    
                      <div id="comment-reply-2" class="comment comment-reply">
                        <div class="d-flex">
                          <div class="comment-img"><img src="assets/img/blog/comments-4.jpg" alt=""></div>
                          <div>
                            <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                            <time datetime="2020-01-01">01 Jan, 2020</time>
                            <p>
                              Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                            </p>
                          </div>
                        </div>
    
                      </div><!-- End comment reply #2-->
    
                    </div><!-- End comment reply #1-->
    
                  </div><!-- End comment #2-->
    
                  <div id="comment-3" class="comment">
                    <div class="d-flex">
                      <div class="comment-img"><img src="assets/img/blog/comments-5.jpg" alt=""></div>
                      <div>
                        <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan, 2020</time>
                        <p>
                          Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem aspernatur aut quam ut. Voluptatem est accusamus iste at.
                          Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio veniam. Quam officia sit nostrum dolorem.
                        </p>
                      </div>
                    </div>
    
                  </div><!-- End comment #3 -->
    
                  <div id="comment-4" class="comment">
                    <div class="d-flex">
                      <div class="comment-img"><img src="assets/img/blog/comments-6.jpg" alt=""></div>
                      <div>
                        <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan, 2020</time>
                        <p>
                          Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.
                        </p>
                      </div>
                    </div>
    
                  </div><!-- End comment #4 --> --}}

                        <div class="reply-form">
                            <h4>Leave a Reply</h4>
                            <p>Your email address will not be published. Required fields are marked * </p>
                            <form action="{{ route('comments.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <div class="row">
                                    <div class="col form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Your Name"
                                            required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="comment" class="form-control" placeholder="Your Comment*" required></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Post Comment</button>

                            </form>

                        </div>

                    </div><!-- End blog comments -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <div class="sidebar-item search-form">

                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                @foreach ($categories as $item)
                                    <li><a href="#">{{ $item->title }}
                                            <span>({{ $item->post->count() }})</span></a></li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach ($postLatest as $item)
                                <div class="post-item clearfix">
                                    <img src="{{ asset('img/' . $item->img) }}" alt=""
                                        style="width: 80px; height:50px; object-fit:cover">
                                    <h4><a href="/article-dema-uninus/{{ $item->slug }}">{{ $item->title }}</a></h4>
                                    <time datetime="{{ $item->created_at->format('Y-m-d') }}">
                                        {{ $item->created_at->format('d M, Y') }}
                                    </time>
                                </div>
                            @endforeach


                        </div><!-- End sidebar recent posts-->

                        <h3 class="sidebar-title">Tags</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                @foreach ($tags as $item)
                                    <li><a href="#">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Single Section -->
@endsection
