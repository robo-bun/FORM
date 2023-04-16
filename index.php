<div class="parent">
    <form action="" class="form">
        <section class="form__container">
            <h3 class="title">PAYMENT DETAILS</h3>

            <input class="form__dropdownCardNumber" type="text" id="cardnamepd" name="cardnamepd" list="suggestion" min="4" max="30" placeholder="NAME ON CARD">
                <datalist class="form__dropdownCardNumber" id="suggestion">
                    <option class="form__dropdownCardNumber_item">Visa</option>
                    <option class="form__dropdownCardNumber_item">MasterCard</option>
                    <option class="form__dropdownCardNumber_item">AmericanExpress</option>
                </datalist>

            <div class="box">
                <div class="box__item">
                    <input class="form__input" type="number" id="cardnumber1pd" name="cardnumber1pd" placeholder="CARD NUMBER">
                </div>
                <div class="box__item">
                    <input class="form__input" type="date" id="carddate" name="carddate" placeholder="EXPIRY DATE">
                </div>
                <div class="box__item">
                    <input class="form__input" type="number" id="cardnumber2pd" name="cardnumber2pd" placeholder="CARD NUMBER">
                </div>
            </div>
        </section>

        <section class="form__container">
            <h3 class="title">BILLING ADDRESS</h3>

            <div class="box">
                <div class="box__item">
                    <input class="form__input" type="text" id="cardnameba" name="cardnameba" placeholder="NAME ON CARD">
                </div>
                <div class="box__item">
                    <input class="form__input" type="text" id="city" name="city" placeholder="CITY">
                </div>
            </div>

            <div class="box">
                <div class="box__item">
                    <select class="form__dropdownState" name="province" id="province">
                        <option class="form__dropdownState_item" value="" hidden>STATE PROVINCE</option>
                        <option class="form__dropdownState_item" value="">Alaska</option>
                        <option class="form__dropdownState_item" value="">Colorado</option>
                        <option class="form__dropdownState_item" value="">Florida</option>
                    </select>
                </div>
                <div class="box__item">
                    <input class="form__input" type="number" id="zipcode" name="zipcode" placeholder="ZIP CODE">
                </div>
            </div>
        </section>

        <button class="btn" type="submit" name="pay">PAY $888</button>

    </form>
</div>


<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        border: none;
    }

    .parent {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .form {
        width: 60%;
    }

    .form__container {
        margin-bottom: 50px;
    }

    .title {
        margin-bottom: 20px;
        font-size: 24px;
        text-transform: uppercase;
    }

    .form__dropdownCardNumber {
        width: 100%;
        padding: 10px 0;
        font-size: 18px;
        border-bottom: 1px solid #000;
    }

    .form__dropdownCardNumber_item {
        width: 100%;
        font-size: 18px;
        line-height: 140%;
        padding: 5px 0;
    }

    .form__dropdownState {
        width: 100%;
        padding: 10px 0;
        font-size: 18px;
        border-bottom: 1px solid #000;
        color: #6E6F72;
    }

    .form__dropdownState_item:not(:first-of-type) {
        color: #000;
    }

    .form__input {
        width: 100%;
        padding: 10px 0;
        font-size: 18px;
        border-bottom: 1px solid #000;
    }

    .box {
        display: flex;
        gap: 30px;
        justify-content: space-between;
    }

    .box__item {
        display: flex;
        justify-content: space-between;
    }

    .btn {
        display: block;
        width: 100%;
        border-radius: 8px;
        line-height: 200%;
        background-color: #000;
        font-size: 20px;
        color: #fff;
        cursor: pointer;
    }

</style>
