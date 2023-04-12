<form action="" method="post">

    <section>
        <h3>PAYMENT DETAILS</h3>
        <p>
            <input type="text" id="cardnamepd" name="cardnamepd" list="suggestion" min="4" max="30" placeholder="NAME ON CARD">
            <datalist id="suggestion">
                <option>Visa</option>
                <option>MasterCard</option>
                <option>AmericanExpress</option>
            </datalist>
        </p>
        <p>
            <input type="number" id="cardnumber1pd" name="cardnumber1pd" minlenght="12" maxlenght="16" placeholder="CARD NUMBER">
            <input type="date" id="carddate" name="carddate" placeholder="EXPIRY DATE">
            <input type="number" id="cardnumber2pd" name="cardnumber2pd" minlenght="12" maxlenght="16" placeholder="CARD NUMBER">
        </p>
    </section>

    <section>
        <h3>BILLING ADDRESS</h3>
        <p>
            <input type="text" id="cardnameba" name="cardnameba" min="4" max="30" placeholder="NAME ON CARD">
            <input type="text" id="city" name="city" min="3" max="30" placeholder="CITY">
        </p>
        <p>
            <select name="province" id="province">
                <option value="" hidden>STATE PROVINCE</option>
                <option value="">Alaska</option>
                <option value="">Colorado</option>
                <option value="">Florida</option>
            </select>
        <input type="number" id="zipcode" name="zipcode" min="3" max="5" placeholder="ZIP CODE">
        </p>
    </section>
    <section>
        <button type="submit" name="pay">PAY $888</button>
    </section>
</form>
