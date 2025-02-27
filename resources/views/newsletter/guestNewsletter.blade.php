@extends('layouts.app')

@section('title', 'News Letter')

@section('content')

<style>
.toggle_input {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 5;
  opacity: 0;
  cursor: pointer;
}

.toggle_label {
  width: 75px;
  height: 35px;
  background: #ccc;
  position: relative;
  display: inline-block;
  border-radius: 40px;
  transition: 0.4s;
  box-sizing: border-box;
}

.toggle_label:after {
  content: "";
  position: absolute;
  width: 35px;
  height: 35px;
  border-radius: 100%;
  left: 0;
  top: 0;
  z-index: 2;
  background: #fff;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  transition: 0.4s;
}

.toggle_input:checked + .toggle_label {
  background-color: #004aad;
}

.toggle_input:checked + .toggle_label:after {
  left: 40px;
}

.toggle_button {
  position: relative;
  width: 75px;
  height: 35px;
  margin: auto;
}

.icon-container {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 20px;
}

.arrow-container {
  position: relative;
  width: 50px;
  text-align: center;
}

.cross-mark {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 30px;
  color: red;
  opacity: 0;
  transition: opacity 0.5s ease-in-out;
}

.envelope-move {
  transform: translateX(70px);
  transition: transform 0.5s ease-in-out;
}

.hidden{
    opacity: 0 !important;
    pointer-events: none;
}

.visible{
    opacity: 1 !important;
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const toggleInput = document.getElementById("toggle");
    const message = document.getElementById("message");
    const envelopeIcon = document.getElementById("envelope-icon"); // メールアイコン
    const arrowIcon = document.getElementById("arrow-icon"); // 矢印
    const crossMark = document.getElementById("cross-mark"); // バツ

    // 初期状態ではバツを非表示
    crossMark.classList.add("hidden");

    // チェック状態が変わったときの処理
    toggleInput.addEventListener("change", function() {
        if (this.checked) {
            // メールアイコンを右に移動
            envelopeIcon.classList.add("envelope-move");

            // 矢印を表示
            arrowIcon.style.display = "none";

            // バツを非表示
            crossMark.classList.add("hidden");

            message.textContent = "Receive emails from the host.";
        } else {
            // メールアイコンを元の位置に戻す
            envelopeIcon.classList.remove("envelope-move");

            // 矢印を非表示
            arrowIcon.style.display = "inline";

            // バツを表示
            crossMark.classList.remove("hidden");
            crossMark.classList.remove("visible");

            message.textContent = "Do not receive emails from the host.";
        }
    });
});
</script>

<div class="container">
    <h2>News Letter</h2>
    <div class="my-5 card shadow-lg" style="justify-content: center; align-items: center; height: 60vh; text-align: center;
                                            border: 7px solid #004aad; border-radius: 10px; padding: 20px;">
        <div class="row my-3 icon-container">
            <div class="col">
                <i class="fa-solid fa-user fa-3x"></i>
            </div>
            <div class="col" id="original-envelope-position">
                <i class="fa-solid fa-envelope fa-2x" id="envelope-icon"></i>
            </div>
            <div class="col arrow-container">
                <i class="fa-solid fa-arrow-right fa-3x" style="color: #dcbf7d" id="arrow-icon"></i>
                <span class="cross-mark" id="cross-mark"><i class="fa-solid fa-xmark"></i></span>
            </div>
            <div class="col" id="users-col">
                <i class="fa-solid fa-users fa-3x"></i>
            </div>
        </div>
        <h4>You can recieve special offers and the latest updates via newsletters <br>
            from the hosts of properties you have stayed at in the past. <br>
            <span style="display: inline-block; margin-top: 20px; font-weight: bold;">Would you like to receive newsletters?</span>
        </h4>
        <p style="margin-top: 20px; color: #cc0000;">If you choose to receive them, newsletters will be sent to your registered email address.</p>
        <div style="margin-top: 40px;">
            <div class="toggle_button">
                <input id="toggle" class="toggle_input" type='checkbox' />
                <label for="toggle" class="toggle_label">
            </div>
        </div>
        <p id="message" style="margin-top: 20px; font-weight: bold;"></p>
    </div>
</div>




@endsection