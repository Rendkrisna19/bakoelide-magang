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
        <h2>Form Kuisioner</h2>
        <div class="progress-bar">
            <div class="progress"></div>
        </div>

        <form method="POST" action="{{ route('kuisioner.store') }}" onsubmit="return validateForm();">
            @csrf

            <!-- TUJUAN -->
            <label>Apa Tujuan Utama Anda?<span class="required">*</span></label>
            <div class="radio-group">
                <div class="quiz-answer"><input type="radio" name="tujuan" value="meningkatkan-penjualan"> Meningkatkan penjualan</div>
                <div class="quiz-answer"><input type="radio" name="tujuan" value="menarik-konten"> Membuat konten menarik</div>
                <div class="quiz-answer"><input type="radio" name="tujuan" value="membantu-audience"> Informasi untuk audience</div>
                <div class="quiz-answer"><input type="radio" name="tujuan" value="trend-market"> Strategi branding</div>
            </div>

            <!-- TANTANGAN -->
            <label>Apa Tantangan Terbesar Anda Saat Ini?<span class="required">*</span></label>
            <div class="radio-group">
                <div class="quiz-answer"><input type="checkbox" name="tantangan[]" value="engagement"> Engagement rendah</div>
                <div class="quiz-answer"><input type="checkbox" name="tantangan[]" value="menjual-produk"> Tidak tahu cara jual</div>
                <div class="quiz-answer"><input type="checkbox" name="tantangan[]" value="tidak-punya-waktu"> Tidak punya waktu</div>
                <div class="quiz-answer"><input type="checkbox" name="tantangan[]" value="bimbingan"> Butuh bimbingan</div>
                <div class="quiz-answer"><input type="checkbox" name="tantangan[]" value="lainnya"> Lainnya</div>
            </div>

            <!-- SOCIAL COMMERCE -->
            <label>Apakah Anda Pernah Menggunakan Platform Social Commerce?<span class="required">*</span></label>
            <div class="radio-group">
                <div class="quiz-answer"><input type="radio" name="social_commerce" value="instagram-shopping"> Instagram Shopping</div>
                <div class="quiz-answer"><input type="radio" name="social_commerce" value="tiktok-shop"> TikTok Shop</div>
                <div class="quiz-answer"><input type="radio" name="social_commerce" value="whatsapp-business"> WhatsApp Business</div>
                <div class="quiz-answer"><input type="radio" name="social_commerce" value="tidak-menggunakan"> Tidak pernah</div>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</section>

<script>
function validateForm() {
    const tujuan = document.querySelector('input[name="tujuan"]:checked');
    const tantangan = document.querySelectorAll('input[name="tantangan[]"]:checked');
    const social = document.querySelector('input[name="social_commerce"]:checked');

    if (!tujuan || tantangan.length === 0 || !social) {
        alert('Semua pertanyaan wajib diisi!');
        return false;
    }

    return true;
}
</script>
@endsection

@section('footer')
    <h6>footer</h6>
@endsection
