
//=================
//モーダルを開く関数
//=================

//modalを開くための画像
const open_1 = document.getElementById("modal_open_1");
const open_2 = document.getElementById("modal_open_2");
const open_3 = document.getElementById("modal_open_3");
const open_4 = document.getElementById("modal_open_4");
const open_5 = document.getElementById("modal_open_5");

//モーダル自体
const modal_1 = document.getElementById("modal_1");
const modal_2 = document.getElementById("modal_2");
const modal_3 = document.getElementById("modal_3");
const modal_4 = document.getElementById("modal_4");
const modal_5 = document.getElementById("modal_5");

//モーダルを閉じるボタン
const close_1 = document.getElementById("close_btn_1");
const close_2 = document.getElementById("close_btn_2");
const close_3 = document.getElementById("close_btn_3");
const close_4 = document.getElementById("close_btn_4");
const close_5 = document.getElementById("close_btn_5");


//=================
//モーダルを開く関数_3
//=================
function modalOpen_1() {
    modal_1.classList.add("modal_on");
}
open_1.addEventListener("click", modalOpen_1);

function modalCloseOut_1() {
    modal_1.classList.remove("modal_on");
}
close_1.addEventListener("click", modalCloseOut_1);

//モーダルの背景をクリックで閉じる
function modalClose_1(e) {
    if (e.target === modal_1) {
        modal_1.classList.remove("modal_on");
    }
}
addEventListener("click", modalClose_1);


//=================
//モーダルを開く関数_2
//=================
function modalOpen_2() {
    modal_2.classList.add("modal_on");
}
open_2.addEventListener("click", modalOpen_2);

function modalCloseOut_2() {
    modal_2.classList.remove("modal_on");
}
close_2.addEventListener("click", modalCloseOut_2);

//モーダルの背景をクリックで閉じる
function modalClose_2(e) {
    if (e.target === modal_2) {
        modal_2.classList.remove("modal_on");
    }
}
addEventListener("click", modalClose_2);

//=================
//モーダルを開く関数_3
//=================
function modalOpen_3() {
    modal_3.classList.add("modal_on");
}
open_3.addEventListener("click", modalOpen_3);

function modalCloseOut_3() {
    modal_3.classList.remove("modal_on");
}
close_3.addEventListener("click", modalCloseOut_3);

//モーダルの背景をクリックで閉じる
function modalClose_3(e) {
    if (e.target === modal_3) {
        modal_3.classList.remove("modal_on");
    }
}
addEventListener("click", modalClose_3);

//=================
//モーダルを開く関数_4
//=================
function modalOpen_4() {
    modal_4.classList.add("modal_on");
}
open_4.addEventListener("click", modalOpen_4);

function modalCloseOut_4() {
    modal_4.classList.remove("modal_on");
}
close_4.addEventListener("click", modalCloseOut_4);

//モーダルの背景をクリックで閉じる
function modalClose_4(e) {
    if (e.target === modal_4) {
        modal_4.classList.remove("modal_on");
    }
}
addEventListener("click", modalClose_4);

//=================
//モーダルを開く関数_5
//=================
function modalOpen_5() {
    modal_5.classList.add("modal_on");
}
open_5.addEventListener("click", modalOpen_5);

function modalCloseOut_5() {
    modal_5.classList.remove("modal_on");
}
close_5.addEventListener("click", modalCloseOut_5);

//モーダルの背景をクリックで閉じる
function modalClose_5(e) {
    if (e.target === modal_5) {
        modal_5.classList.remove("modal_on");
    }
}
addEventListener("click", modalClose_5);
