<!-- Collection section start -->
<section class="collection-style-1 pb-5" id="collection">
    <div class="bg-blur-color"></div>
    <div class="container">
        <div class="title-style-4 row g-4">
            <div class="col-md-6">
                <h2>We have<span class="txt-success"> 5,000+</span> Collection</h2>
                <p>Here's four easily steps to create and sell your NFTs in Metovo Market</p>
                <img src="../assets/images/nft/line.webp" alt="line" class="img-fluid">
            </div>
        </div>

        @if (count($data) > 0)
            <div
                class="collection-main-wrapper row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 g-3">
                @foreach ($data as $item)
                    <div class="col items">
                        <div class="collection-box filtered-product">
                            <div class="collection-image">
                                <a href="#!">
                                    <img src="{{ asset('assets/uploaded/images/classes/' . $item->image) }}"
                                        alt="NFT" class="img-fluid product-image">
                                </a>
                                <img src="../assets/images/nft/collection/shape.webp" alt="shape"
                                    class="img-fluid right-shape">
                                <a href="#!">
                                    <img src="../assets/images/nft/collection/avatar/1.webp" alt="profile"
                                        class="img-fluid product-profile">
                                </a>
                            </div>
                            <div class="collection-content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="content-title">
                                        <span>{{ $item->class_teacher_relation->name }}</span>
                                        <svg>
                                            <use href="../assets/svg/icon_sprite.svg#successful"></use>
                                        </svg>
                                    </div>
                                    <div class="on-hover brand-style-4">
                                        <button aria-label="more">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </button>
                                        <ul class="on-hover-show brand-box">
                                            <li>
                                                <a href="#">
                                                    <i class="fa-regular fa-share-from-square"></i>
                                                    <span>Share</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa-sharp fa-regular fa-flag"></i>
                                                    <span>Report</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <h6 class="collection-title">
                                    <a href="#">{{ $item->title }}</a>
                                </h6>
                                {{-- <div class="etherum-title">
                            <div>
                                <img src="../assets/images/nft/collection/diamond.webp" alt="ethereum">
                                <p>1.45 ETH</p>
                            </div>
                            <a href="#">Buy Now</a>
                        </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading">Opps, Sorry !</h4>
                        <p>Aww yeah, looks like admin has not been finished preparing classes !</p>
                        <hr>
                        <p class="mb-0">No Class available, contact admin to add class you want.</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>
<!-- Collection section end -->
