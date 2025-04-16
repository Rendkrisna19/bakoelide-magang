<style>
    .related-cont .header-cont {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 50px;
    }

    .related-cont .header-cont .view-btn {
        font-size: 12px;
        border-radius: 30px;
        background-color: transparent;
        border: 1px solid black;
        text-decoration: none;
        color: black;
        padding: 8px 15px;
    }

    .related-cont .related-item-cont {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-bottom: 50px;
    }

    .related-cont .related-item-cont .item-cont {
        background-color: rgba(128, 128, 128, 0.133);
        box-shadow: 4px 4px 4px, rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .related-cont .related-item-cont .item-cont .date-cont h3 {
        margin: 0;
        padding: 0 20px;
        color: grey;
    }

    .related-cont .related-item-cont .item-cont .desc-cont {
        margin: 0;
        padding: 0 20px 20px;
    }

    .related-cont .related-item-cont .item-cont .desc-cont .desc-title-cont h3 {
        margin: 10px 0;
    }

    .related-cont .related-item-cont .item-cont .img-cont img {
        width: 100%;
        height: auto;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
</style>

<div class="related-cont">
    <div class="header-cont">
        <h1>Related Articles</h1>
        <a href="{{ route('blank-page') }}" class="view-btn">View All Articles</a>
    </div>
    <div class="related-item-cont">
        <div class="item-cont">
            <div class="img-cont">
                <img src="{{ asset('assets/images/office.webp') }}" alt="">
            </div>
            <div class="date-cont">
                <h3>Dec 31</h3>
            </div>
            <div class="desc-cont">
                <div class="desc-title-cont">
                    <h3><b>Social Commerce</b></h3>
                </div>
                <small>We will discuss what, why, and how the brand can enhance sales and the brand awareness.</small>
            </div>
        </div>
        <div class="item-cont">
            <div class="img-cont">
                <img src="{{ asset('assets/images/office.webp') }}" alt="">
            </div>
            <div class="date-cont">
                <h3>Dec 31</h3>
            </div>
            <div class="desc-cont">
                <div class="desc-title-cont">
                    <h3><b>Social Commerce</b></h3>
                </div>
                <small>We will discuss what, why, and how the brand can enhance sales and the brand awareness.</small>
            </div>
        </div>
        <div class="item-cont">
            <div class="img-cont">
                <img src="{{ asset('assets/images/office.webp') }}" alt="">
            </div>
            <div class="date-cont">
                <h3>Dec 31</h3>
            </div>
            <div class="desc-cont">
                <div class="desc-title-cont">
                    <h3><b>Social Commerce</b></h3>
                </div>
                <small>We will discuss what, why, and how the brand can enhance sales and the brand awareness.</small>
            </div>
        </div>

    </div>
</div>
