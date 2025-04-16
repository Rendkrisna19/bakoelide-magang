@extends('main')
@section('title', 'services')
<style>
    .quiz-cont {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        background-color: white;
        padding: 50px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 700px;
        margin: 10% 0;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    .progress-bar {
        width: 100%;
        background-color: #eee;
        height: 5px;
        border-radius: 5px;
        margin: 15px 0;
        position: relative;
    }

    .progress {
        width: 40%;
        height: 100%;
        background-color: #ff6600;
        border-radius: 5px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        font-weight: bold;
        margin-top: 20px;
        display: block;
    }

    .required {
        color: red;
    }

    .radio-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
    }

    .radio-group input {
        margin-bottom: 5px;
    }

    select {
        width: 100%;
        padding: 8px;
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #ff6600;
        color: white;
        border: none;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 50px;
    }

    button:hover {
        background-color: #e65c00;
    }

    .quiz-answer {
        display: flex;
        padding: 15px 10px 0;
    }

    .quiz-answer input{
        margin-right: 10px;
    }
</style>
@section('content')
    <section class="quiz-cont">
        <div class="container">
            <h2>KETAHUI BISNIS ANDA</h2>
            <div class="progress-bar">
                <div class="progress"></div>
            </div>

            <form>
                <label>Siapa Anda?<span class="required">*</span></label>
                <div class="radio-group">
                    <div class="quiz-answer">
                        <input type="radio" id="pemilik-bisnis" name="siapa-anda">
                        <small for="pemilik-bisnis">Saya adalah pemilik bisnis kecil dan ingin meningkatkan penjualan
                            online.
                        </small>
                    </div>
                    <div class="quiz-answer">
                        <input type="radio" id="digital-strategist" name="siapa-anda">
                        <small for="digital-strategist">Saya seorang perencana digital yang merancang strategi dari
                            awal.</small>
                    </div>
                    <div class="quiz-answer">
                        <input type="radio" id="kreatif-branding" name="siapa-anda">
                        <small for="kreatif-branding">Saya seorang kreatif yang ingin mengembangkan branding dan strategi
                            pemasaran saya.</small>
                    </div>
                </div>

                <label for="jenis-bisnis">Apa Jenis Bisnis Anda?<span class="required">*</span></label>
                <select id="jenis-bisnis">
                    <option value="">Pilih jenis bisnis yang sedang Anda jalani</option>
                </select>

                <label>Apa Tujuan Utama Anda?<span class="required">*</span></label>
                <div class="radio-group">
                    <div class="quiz-answer">
                        <input type="radio" id="meningkatkan-penjualan" name="tujuan">
                        <small for="meningkatkan-penjualan">Saya ingin mencoba social commerce dan meningkatkan
                            penjualan.</small>
                    </div>
                    <div class="quiz-answer">
                        <input type="radio" id="menarik-konten" name="tujuan">
                        <small for="menarik-konten">Saya ingin mengetahui cara membuat konten yang lebih menarik.</small>
                    </div>
                    <div class="quiz-answer">
                        <input type="radio" id="membantu-audience" name="tujuan">
                        <small for="membantu-audience">Saya membutuhkan informasi dan ide untuk audience saya.</small>
                    </div>
                    <div class="quiz-answer">
                        <input type="radio" id="trend-market" name="tujuan">
                        <small for="trend-market">Saya ingin mengetahui strategi branding untuk bisnis saya.</small>
                    </div>
                </div>

                <label>Apa Tantangan Terbesar Anda Saat Ini?<span class="required">*</span></label>
                <div class="radio-group">
                    <div class="quiz-answer">
                        <input type="radio" id="engagement" name="tantangan">
                        <small for="engagement">Saya kesulitan mendapatkan engagement di media sosial.</small>
                    </div>
                    <div class="quiz-answer">
                        <input type="radio" id="menjual-produk" name="tantangan">
                        <small for="menjual-produk">Saya tidak tahu cara menjual via online (Instagram/TikTok Shop).</small>
                    </div>
                    <div class="quiz-answer">
                        <input type="radio" id="tidak-punya-waktu" name="tantangan">
                        <small for="tidak-punya-waktu">Saya tidak punya waktu untuk membuat konten.</small>
                    </div>
                    <div class="quiz-answer">
                        <input type="radio" id="bimbingan" name="tantangan">
                        <small for="bimbingan">Saya membutuhkan bimbingan tentang strategi digital.</small>
                    </div>
                    <div class="quiz-answer">
                        <input type="radio" id="lainnya" name="tantangan">
                        <small for="lainnya">Lainnya.</small>
                    </div>

                    <label>Apakah Anda Pernah Menggunakan Platform Social Commerce?<span class="required">*</span></label>
                    <div class="radio-group">
                        <div class="quiz-answer">
                            <input type="radio" id="instagram-shopping" name="social-commerce">
                            <small for="instagram-shopping">Ya, saya menggunakan Instagram Shopping.</small>
                        </div>
                        <div class="quiz-answer">
                            <input type="radio" id="tiktok-shop" name="social-commerce">
                            <small for="tiktok-shop">Ya, saya menggunakan TikTok Shop.</small>
                        </div>
                        <div class="quiz-answer">
                            <input type="radio" id="whatsapp-business" name="social-commerce">
                            <small for="whatsapp-business">Ya, saya menggunakan WhatsApp Business.</small>
                        </div>
                        <div class="quiz-answer">
                            <input type="radio" id="tidak-menggunakan" name="social-commerce">
                            <small for="tidak-menggunakan">Tidak, saya tidak pernah menggunakan platform tersebut.</small>
                        </div>
                    </div>

                    <button type="submit">Submit</button>
            </form>
        </div>
    </section>
@endsection
@section('footer')
    <h6>footer</h6>
@endsection
