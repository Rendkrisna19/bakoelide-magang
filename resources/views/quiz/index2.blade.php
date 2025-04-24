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
        width: 700px;
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
        width: 20%;
        align-items: center;
        align-self: center;
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

    input.tantangan_lainya  {
    border-top: none;    /* Menghilangkan border atas */
    border-left: none;   /* Menghilangkan border kiri */
    border-right: none; 
    }

    input[type="checkbox"] {
            accent-color: #e65c00; /* CSS baru untuk mengubah warna checkbox yang dicentang */
        }

        /* Alternatif untuk custom checkbox menggunakan pseudo-elemen */
    input[type="checkbox"]:checked {
            background-color: #e65c00; /* Ganti background menjadi merah saat dicentang */
            border-color: #e65c00; /* Ubah border menjadi merah */
        }

    input[type="radio"] {
            accent-color: #e65c00; /* CSS baru untuk mengubah warna radio yang dicentang */
        }

        /* Alternatif untuk custom radio menggunakan pseudo-elemen */
    input[type="radio"]:checked {
            background-color: #e65c00; /* Ganti background menjadi merah saat dicentang */
            border-color: #e65c00; /* Ubah border menjadi merah */
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
                <label>Apa fokus utama anda saat ini?<span class="required">*</span></label>
                <div class="radio-group">
                    <div class="quiz-answer">
                        <input type="radio" id="pemilik-bisnis" name="siapa-anda">
                        <small for="pemilik-bisnis">Optimasi Konten untuk media sosial
                        </small>
                    </div>
                    <div class="quiz-answer">
                        <input type="radio" id="digital-strategist" name="siapa-anda">
                        <small for="digital-strategist">Hyper personalisasi dalam email marketing</small>
                    </div>
                    <div class="quiz-answer">
                        <input type="radio" id="kreatif-branding" name="siapa-anda">
                        <small for="kreatif-branding">Meningkatkan ROI dari iklan digital</small>
                    </div>

                    <div class="quiz-answer">
                        <input type="radio" id="kreatif-branding" name="siapa-anda">
                        <small for="kreatif-branding">Menganalisis perilaku pelanggan</small>
                    </div>
                </div>

            

                <label>Platform utama anda?<span class="required">*</span></label>
                <div class="radio-group">
                    <div class="quiz-answer">
                        <input type="radio" id="meningkatkan-penjualan" name="tujuan">
                        <small for="meningkatkan-penjualan">Instagram</small>
                    </div>
                    <div class="quiz-answer">
                        <input type="radio" id="menarik-konten" name="tujuan">
                        <small for="menarik-konten">TikTok</small>
                    </div>
                    <div class="quiz-answer">
                        <input type="radio" id="membantu-audience" name="tujuan">
                        <small for="membantu-audience">Facebook</small>
                    </div>
                    <div class="quiz-answer">
                        <input type="radio" id="trend-market" name="tujuan">
                        <small for="trend-market">Google Ads</small>
                    </div>
                </div>

                <label>Apa tantangan terbesar anda<span class="required">*</span></label>
                <div class="radio-group">
                    <div class="quiz-answer">
                        <input type="checkbox" id="engagement" name="tantangan">
                        <small for="engagement">Engagemenet konten rendah</small>
                    </div>
                    <div class="quiz-answer">
                        <input type="checkbox" id="menjual-produk" name="tantangan">
                        <small for="menjual-produk">Saya tidak tahu cara menjual via online (Instagram/TikTok Shop).</small>
                    </div>
                    <div class="quiz-answer">
                        <input type="checkbox" id="tidak-punya-waktu" name="tantangan">
                        <small for="tidak-punya-waktu">Kesulitas membuat hyper-personalisasi</small>
                    </div>
                    <div class="quiz-answer">
                        <input type="checkbox" id="bimbingan" name="tantangan">
                        <small for="bimbingan">Analitik data terlalu rumit</small>
                    </div>
                    <div class="quiz-answer">
                        <input type="checkbox" id="lainnya" name="tantangan">
                        <small for="lainnya">Konversi iklan digital rendah</small>
                    </div>
                    <div class="quiz-answer">
                        <input type="checkbox" id="lainnya" name="tantangan">
                        <small for="lainnya">Lainnya.</small>
                        <input type="text" id="lainnya" name="tantangan_lainya" class="tantangan_lainya">
                    </div>
                    


                    <button type="submit">Submit</button>
            </form>
        </div>
    </section>
@endsection
@section('footer')
    <h6>footer</h6>
@endsection
