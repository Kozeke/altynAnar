<template>
    <!-- Start checkout-area -->
    <div>
        <div class="col-md-9 col-sm-9">
            <div class="checkout-area col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cart-title">
                            <h2 class="entry-title" style="padding-top: 0px;padding-left:15px">Оформление заказа</h2>
                        </div>
                        <!-- Accordion start -->
                        <div class="panel-group" id="accordion">
                            <!-- End Checkout-options -->
                            <!-- Start 2 Payment-Address -->
                            <div class="panel panel_default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a
                                            class="accordion-trigger"
                                            data-toggle="collapse"
                                            data-parent="#accordion"
                                            href="#payment-address"
                                        >
                                            Шаг 1: Способ доставки
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div class>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="shipping_option" style="padding-left: 15px;padding-right: 15px">
                                                <div class="shpping_delivery">
                                                    <div class="delivery_header">
                                                        <input
                                                            type="radio"
                                                            id="test1"
                                                            v-model="delivery"
                                                            name="radio-group"
                                                            value="1"
                                                            checked
                                                        />
                                                        <label for="test1">Курьерская доставка</label>
                                                    </div>
                                                    <div class="delivery_body">
                                                        <h5>Стоимость доставки:</h5>
                                                        <span style="margin-top: -22px">Уточняйте у продавца</span>
                                                    </div>
                                                </div>
                                                <div class="shpping_takeout">
                                                    <div class="delivery_header">
                                                        <input
                                                            type="radio"
                                                            id="test2"
                                                            value="0"
                                                            v-model="delivery"
                                                            name="radio-group"
                                                        />
                                                        <label for="test2">Самовывоз</label>
                                                    </div>
                                                    <div class="delivery_body">
                                                        <h5>По адресу:</h5>
                                                        <span
                                                            style="margin-top: -22px">г. Караганда, ул. Гоголя 52/3</span>
                                                        <h5>Телефон:</h5>
                                                        <span
                                                            style="margin-top: -22px">+7(7171)777777, +7(707)1234567</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding-right:15px;padding-left:15px">
                                                <p style="margin-top:15px">
                                                    <strong>Комментарий</strong>
                                                </p>
                                                <p>
                          <textarea
                              v-model="comments"
                              style="height:100px"
                              class="form-control"
                              name="comment"
                              rows="8"
                          ></textarea>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Payment-Address -->
                            <!-- Start 2 Payment-Address -->
                            <div class="panel panel_default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a
                                            class="accordion-trigger"
                                            data-toggle="collapse"
                                            data-parent="#accordion"
                                            href="#payment-address"
                                        >
                                            Шаг 2: Контактная информация
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div class>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="shipping_option"
                                                 style="padding-left: 15px;padding-right: 15px"></div>
                                            <div style="padding-right:15px;padding-left:15px">
                                                <div style="margin-top:15px;display:inline-flex">
                                                    <strong>Имя</strong>
                                                    <div style="color:red">*</div>
                                                </div>
                                                <p>
                                                    <input
                                                        v-model="name"
                                                        style="margin-top:6px"
                                                        class="form-control"
                                                        name="comment"
                                                        placeholder="Введите ваше имя "
                                                        :class="{ 'red_border': errors && errors.name}"
                                                        rows="8"
                                                    />
                                                </p>
                                                <div style="margin-top:15px;display:inline-flex">
                                                    <strong>Номер телефона</strong>
                                                    <div style="color:red">*</div>
                                                </div>
                                                <p>
                                                    <input
                                                        class="form-control"
                                                        v-model="telephone"
                                                        name="phone"
                                                        :class="{ 'red_border': errors && errors.phone}"
                                                        v-mask="'+7(###)###-##-##'"
                                                        placeholder="Введите номер телефона"
                                                    />
                                                </p>
                                                <div style="margin-top:15px;display:inline-flex">
                                                    <strong>Адрес доставки</strong>
                                                    <div style="color:red">*</div>
                                                </div>
                                                <p>
                                                    <input
                                                        v-model="address"
                                                        style="margin-top:6px"
                                                        class="form-control"
                                                        name="comment"
                                                        rows="8"
                                                        placeholder="Введите адрес куда нужно доставить "
                                                        :class="{ 'red_border': errors && errors.address}"
                                                    />
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Payment-Address -->
                            <!-- Start 3 Checkout-Confirm -->
                            <div class="panel panel_default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a
                                            class="accordion-trigger"
                                            data-toggle="collapse"
                                            data-parent="#accordion"
                                            href="#checkout-confirm"
                                        >
                                            Шаг 3: Подтвердите заказ
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div class>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                <tr v-for="cart in carts">
                                                    <td colspan="3" class="text-left">{{cart.name}}</td>
                                                    <td class="text-left">{{cart.amount}} шт. по</td>
                                                    <td class="text-left">{{cart.price}} тг.</td>
                                                    <td class="text-left">{{total(cart)}} тг.</td>
                                                </tr>
                                                </thead>
                                                <tbody></tbody>
                                                <tfoot>
                                                <tr>
                                                    <td class="text-right" colspan="5">
                                                        <strong>За доставку</strong>
                                                    </td>
                                                    <td
                                                        class="text-right"
                                                        style="width:200px"
                                                    >Вам позвонит администратор чтобы уточнить цену за доставку
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="5">
                                                        <strong>Общая сумма без учета доставки</strong>
                                                    </td>
                                                    <td class="text-right">{{totalprice}} тг.</td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="buttons pull-right">
                                            <input
                                                @click="placeOrder()"
                                                type="button"
                                                class="btn btn-primary"
                                                value="Сделать заказ"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Checkout-Confirm -->
                        </div>
                        <!-- Accordion end -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel-group" style="padding-top:52px" id="accordion">
                <div class="panel panel_default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a
                                class="accordion-trigger"
                                data-toggle="collapse"
                                data-parent="#accordion"
                                href="#payment-address"
                            >
                                <i class="fa fa-bookmark"></i>Ваш Заказ
                            </a>
                        </h4>
                    </div>
                    <div class>
                        <div class="panel-body">
                            <div class="row">
                                <div class="shipping_option" style="padding-left: 15px;padding-right: 15px"></div>
                                <div style="padding-right:15px;padding-left:15px">
                                    <div style="display:inline-flex">
                                        <p>Кол-во товаров в корзине:</p>
                                        <div style="margin-left:5px">{{total_amount}} шт.</div>
                                    </div>
                                    <div class="result_footer">
                                        <div style="display:inline-flex" class="result_cart">
                                            <div class="footer_title">
                                                <span>Сумма к оплате не включая доставку:</span>
                                            </div>
                                            <div style="margin-left:5px" class="total_price">
                                                <div>{{totalprice}} тг.</div>
                                            </div>
                                        </div>
                                        <div class="result_submit" style="padding-top:5px">
                                            <a href="#">Вы должны будете оплатить при доставке</a>
                                        </div>
                                        <div class="buttons pull-right">
                                            <input
                                                @click="placeOrder()"
                                                type="button"
                                                class="btn btn-primary"
                                                value="Сделать заказ"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shopping-Cart -->
</template>

<script>
export default {
    data() {
        return {
            foods: "",
            categories: "",
            carts: [],
            cartadd: {
                id: "",
                name: "",
                amount: "",
                price: "",
                photo_url: ""
            },
            badge: "0",
            quantity: "1",
            totalprice: "0",
            total_amount: "",
            name: "",
            address: "",
            telephone: "",
            errors: "",
            delivery: "",
            comments: ""
        };
    },
    methods: {
        placeOrder() {
            this.delivery = parseInt(this.delivery);
            let _this = this;
            axios
                .post("/api/place/order", {
                    delivery: this.delivery,
                    name: this.name,
                    address: this.address,
                    phone: this.telephone,
                    carts: this.carts,
                    totalprice: this.totalprice,
                    comments: this.comments
                })
                .then(function (response) {
                    console.log(response.data);
                })
                .catch(function (error) {
                    _this.errors = error.response.data.error;
                    //   _this.errors = error.;
                });
            return false;
        },
        totalPrice() {
            console.log("totlapirce");
            if (localStorage.getItem("carts")) {
                this.carts = JSON.parse(localStorage.getItem("carts"));
                this.totalprice = this.carts.reduce((total, item) => {
                    return total + item.amount * item.price;
                }, 0);
                this.total_amount = this.carts.reduce((total, item) => {
                    return total + item.amount;
                }, 0);
            }
        },
        total(cart) {
            return cart.amount * cart.price;
        }
    },
    computed: {},
    mounted() {
        this.totalPrice();
    }
};
</script>

<style scoped lang="scss">
.red_border {
    border: red 1px solid !important;
}

.error {
    border: 1px solid #e4002f !important;
    box-shadow: 0px 0px 10px rgba(228, 0, 47, 0.2) !important;
}

.err-text {
    position: absolute;
    bottom: 0;
    text-align: left;
    color: #e4002f;
    font-size: 12px;
}

.err {
    visibility: hidden;
    position: absolute;
    top: 46px;
    right: 18px;
    width: 20px;
    height: 20px;
    border-radius: 50%;

    background: #ffffff;
    border: 1px solid #e4002f;
    box-sizing: border-box;

    svg {
        margin-top: -8px;
    }
}

.err-text {
    position: absolute;
    bottom: 0;
    text-align: left;
    color: #e4002f;
    font-size: 12px;
}

.body_content {
    margin: auto;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    width: 80%;
    -webkit-box-shadow: 1px 2px 23px 0px rgba(22, 127, 146, 0.3);
    -moz-box-shadow: 1px 2px 23px 0px rgba(22, 127, 146, 0.3);
    box-shadow: 1px 2px 23px 0px rgba(22, 127, 146, 0.3);
    padding: 40px;
    margin-bottom: 100px;
}

.checkout_procedure {
    width: 60%;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
}

.step_header {
    border-bottom: 1px solid #d9d9d9;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin-top: 20px;
    margin-bottom: 10px;

    span {
        background-color: rgb(22, 127, 146);
        color: #fff;
        padding: 4px 14px;
        border-radius: 50%;
        text-align: center;
        margin: 0px 30px 10px 10px;
    }

    h2 {
        font-size: 22px;
        font-weight: 500;
    }
}

.last_step .step_header {
    margin-top: 0;
}

.registered_form {
    margin: 20px 0;
    text-align: center;
    height: 80px;
    background-color: rgb(210, 46, 81, 0.3);
    border-radius: 3px;
    padding: 20px;

    h2 {
        font-size: 18px;
        font-weight: 400;

        span {
            border: 1px solid rgb(210, 46, 81, 0.3);
            border-radius: 3px;
            padding: 5px 10px;
            cursor: pointer;
        }

        span:hover {
            background-color: rgb(210, 46, 81, 0.3);
            color: #fff;
        }
    }

    h3 {
        font-size: 16px;
        font-weight: 300;
        height: 50px;

        span {
            cursor: pointer;
            color: rgb(22, 127, 146);
        }

        span:hover {
            text-decoration: underline;
        }
    }
}

.col-form-label {
    font-weight: bold;
    margin-bottom: 2px;
    display: block;
}

.form-control {
    outline: none;
    appearance: unset !important;
    -moz-appearance: unset !important;
    -webkit-appearance: unset !important;
    -o-appearance: unset !important;
    -ms-appearance: unset !important;
}

.form-control:focus {
    outline: none;
    box-shadow: none !important;
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    -o-box-shadow: none !important;
    -ms-box-shadow: none !important;
}

.form-control {
    display: block;
    width: 100%;
    border: 1px solid #ebebeb;
    padding: 0 20px;
    box-sizing: border-box;
}

.shipping_option {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}

.shpping_delivery,
.shpping_takeout {
    width: 48%;
    text-align: center;
    border: 2px solid rgb(210, 46, 81, 0.3);
    border-radius: 3px;
    margin: 0 2%;
    font-size: 1rem;
}

.shpping_delivery {
    margin-left: 0;
}

.shpping_takeout {
    margin-right: 0;
}

.shipping_option,
.payment_option {
    label {
        padding: 6px;
        height: 46px;
        width: 100%;
        text-align: left;
        cursor: pointer;
        position: relative;
        transition: color 200ms ease-in;
        overflow: hidden;
        background-color: rgb(210, 46, 81, 0.3);
        margin-bottom: 0;

        &:after {
            width: 28px;
            height: 28px;
            content: "";
            border: 2px solid rgb(22, 127, 146, 0.5);
            background-color: #fff;
            background-image: url("data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.414 11L4 12.414l5.414 5.414L20.828 6.414 19.414 5l-10 10z' fill='%23fff' fill-rule='nonzero'/%3E%3C/svg%3E ");
            background-repeat: no-repeat;
            border-radius: 10%;
            z-index: 2;
            position: absolute;
            right: 5%;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            transition: all 200ms ease-in;
        }
    }

    input:checked ~ label {
        &:before {
            transform: translate(-50%, -50%) scale3d(56, 56, 1);
            opacity: 1;
        }

        &:after {
            background-color: #d22e51;
            border-color: #d22e51;
        }
    }

    input {
        width: 32px;
        height: 32px;
        order: 1;
        z-index: 2;
        position: absolute;
        right: 30px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        visibility: hidden;
    }
}

.delivery_header {
    height: 46px;
}

.delivery_body {
    display: flex;
    flex-direction: column;
    padding: 8px;

    h5,
    span {
        font-size: 1rem;
        text-align: center;
    }

    span {
        font-style: italic;
        margin-top: -22 px;
    }

    h5 {
        text-align: left;
        font-weight: 600;
    }
}

.payment_option {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;

    .pay_option {
        width: 45%;
        margin: 5%;
        margin-top: 2%;
    }

    .pay_one,
    .pay_three {
        margin-left: 0;
        margin-bottom: 0;
    }

    .pay_two,
    .pay_four {
        margin-right: 0;
        margin-bottom: 0;
    }
}

.payment_option {
    label {
        height: 70px;
        border-radius: 3px;

        &:after {
            top: 67%;
        }
    }
}

.checkout_products {
    width: 35%;
    margin-left: 5%;
    border: 1px solid rgb(210, 46, 81, 0.3);
    border-radius: 3px;
    height: 50%;

    .product_header {
        text-align: center;
        padding: 10px;
        color: #2a3132;

        i {
            margin-right: 10px;
            color: #167f92;
        }

        h2 {
            font-size: 22px;
            font-weight: 500;
            text-align: center;
            color: #167f92;
        }
    }

    .my_products {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        margin-bottom: 10px;
    }

    .my_products:nth-last-of-type(odd) {
        background-color: rgb(22, 127, 146, 0.2);
    }

    .product_name {
        width: 80%;
        padding: 5px;

        span {
            font-size: 16px;
        }
    }

    .product_amount {
        display: flex;
        flex-direction: column;
        width: 20%;
        padding: 0 5px;

        span:first-of-type {
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 2px;
        }

        span:last-of-type {
            font-size: 18px;
            letter-spacing: 2px;
            padding-right: 5px;
            color: #808080;
        }
    }

    .result_footer {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        margin-top: 20px;

        .result_cart {
            display: flex;
            flex-direction: row;
            padding: 0 5px;
            border-top: 1px solid rgb(22, 127, 146, 0.2);
            border-bottom: 1px solid rgb(22, 127, 146, 0.2);

            .footer_title {
                width: 60%;

                span {
                    font-size: 16px;
                    font-weight: 600;
                }
            }

            .total_price {
                width: 40%;
                padding: 0 5px 0 0;

                span {
                    font-size: 18px;
                    font-weight: 600;
                    letter-spacing: 2px;
                }
            }
        }

        .result_submit {
            margin: 10px 10px 10px auto;
            background-color: rgb(22, 127, 146, 0.7);
            border-radius: 3px;
            padding: 5px 10px;
            cursor: pointer;

            a {
                font-size: 18px;
                color: white;
            }
        }

        .result_submit:hover {
            background-color: rgb(22, 127, 146);
        }
    }

    ::placeholder {
        font-size: 16px;
    }
}

@media screen and (max-width: 1450px) {
    .body_content {
        width: 90%;
    }
}

@media screen and (max-width: 1224px) {
    .step_header h2 {
        font-size: 18px;
    }
    .last_step .step_header {
        margin-top: 30px;
    }
    .registered_form {
        margin: 12px 0;
        padding: 12px;

        h2 {
            font-size: 14px;
        }

        h3 {
            font-size: 14px;
            height: 46px;
        }
    }
    .form-control {
        padding: 0 12px;
    }
    .shipping_option,
    .payment_option {
        label {
            font-size: 14px;
        }
    }
    input {
        font-size: 14px;
    }
    .delivery_body {
        display: flex;
        flex-direction: column;
        padding: 8px;

        h5,
        span {
            font-size: 14px;
        }

        h5 {
            font-weight: 500;
        }
    }
    .payment_option {
        .pay_option {
            width: 80%;
            margin: 4px 10%;
        }
    }
    .payment_option {
        label {
            height: 70px;
            border-radius: 3px;
            font-size: 14px;

            &:after {
                top: 67%;
            }
        }
    }
    .checkout_products {
        width: 35%;
        margin-left: 5%;
        height: 50%;

        .product_header {
            padding: 10px;

            i {
                margin-right: 10px;
            }

            h2 {
                font-size: 18px;
            }
        }

        .product_name {
            width: 80%;
            padding: 5px;

            span {
                font-size: 14px;
            }
        }

        .product_amount {
            width: 20%;
            padding: 0 5px;

            span:first-of-type {
                font-size: 14px;
                font-weight: 600;
                letter-spacing: 2px;
            }

            span:last-of-type {
                font-size: 14px;
                letter-spacing: 5px;
                padding-right: 5px;
            }
        }

        .result_footer {
            margin-top: 20px;

            .result_cart {
                padding: 0 5px;

                .footer_title {
                    width: 60%;

                    span {
                        font-size: 14px;
                        font-weight: 500;
                    }
                }

                .total_price {
                    width: 40%;
                    padding: 0 5px 0 0;

                    span {
                        font-size: 14px;
                        font-weight: 500;
                        letter-spacing: 2px;
                    }
                }
            }

            .result_submit {
                margin: 10px 10px 10px auto;
                padding: 5px 10px;

                a {
                    font-size: 14px;
                }
            }
        }
    }
    ::placeholder {
        font-size: 14px;
    }
}

@media screen and (max-width: 1024px) {
    .body_content {
        width: 100%;
    }
    .step_header {
        span {
            text-align: center;
            margin: 0px 18px 6px 6px;
        }

        h2 {
            font-size: 16px;
        }
    }
    .last_step .step_header {
        margin-top: 30px;
    }
    .registered_form {
        margin: 12px 0;
        padding: 12px;

        h2 {
            font-size: 14px;
        }

        h3 {
            font-size: 14px;
            height: 46px;
        }
    }
    .col-form-label {
        font-size: 14px;
    }
    .form-control {
        padding: 0 12px;
    }
    .shipping_option,
    .payment_option {
        label {
            font-size: 14px;
        }
    }
    .shpping_delivery,
    .shpping_takeout {
        width: 100%;
        margin: 6px 0;
    }
    input {
        font-size: 14px;
    }
    .delivery_body {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        padding: 8px;

        h5,
        span {
            font-size: 14px;
            width: 70%;
            margin: 0;
        }

        h5 {
            font-weight: 500;
            width: 30%;
        }
    }
    .payment_option {
        .pay_option {
            width: 100%;
            margin: 4px 0;
        }
    }
    .payment_option {
        label {
            height: 70px;
            border-radius: 3px;
            font-size: 14px;

            &:after {
                top: 67%;
            }
        }
    }
    .checkout_products {
        width: 35%;
        margin-left: 5%;
        height: 50%;

        .product_header {
            padding: 10px;

            i {
                margin-right: 10px;
            }

            h2 {
                font-size: 18px;
            }
        }

        .product_name {
            width: 70%;
            padding: 5px;

            span {
                font-size: 14px;
            }
        }

        .product_amount {
            width: 30%;
            padding: 0 5px;

            span:first-of-type {
                font-size: 14px;
                font-weight: 600;
                letter-spacing: 2px;
                padding-right: 5px;
            }

            span:last-of-type {
                font-size: 14px;
                letter-spacing: 5px;
                padding-right: 5px;
            }
        }

        .result_footer {
            margin-top: 20px;

            .result_cart {
                padding: 0 5px;

                .footer_title {
                    width: 60%;

                    span {
                        font-size: 14px;
                        font-weight: 500;
                    }
                }

                .total_price {
                    width: 40%;
                    padding: 0 5px 0 0;

                    span {
                        font-size: 14px;
                        font-weight: 500;
                        letter-spacing: 2px;
                    }
                }
            }

            .result_submit {
                margin: 10px 10px 10px auto;
                padding: 5px 10px;

                a {
                    font-size: 14px;
                }
            }
        }
    }
    ::placeholder {
        font-size: 14px;
    }
}

@media screen and (max-width: 802px) {
    .body_content {
        width: 100%;
    }
    .checkout_procedure {
        width: 100%;
    }
    .step_header {
        span {
            text-align: center;
            margin: 0px 18px 6px 6px;
        }

        h2 {
            font-size: 16px;
        }
    }
    .last_step .step_header {
        margin-top: 30px;
    }
    .registered_form {
        margin: 12px 0;
        padding: 12px;
        height: 64px;

        h2 {
            font-size: 14px;
        }

        h3 {
            font-size: 14px;
            height: 46px;
        }
    }
    .form-control {
        padding: 0 12px;
    }
    .shipping_option,
    .payment_option {
        label {
            font-size: 14px;
        }
    }
    .shpping_delivery,
    .shpping_takeout {
        width: 100%;
        margin: 6px 0;
    }
    input {
        font-size: 14px;
    }
    .delivery_body {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        padding: 8px;

        h5,
        span {
            font-size: 14px;
            width: 70%;
            margin: 0;
        }

        h5 {
            font-weight: 500;
            width: 30%;
        }
    }
    .payment_option {
        .pay_option {
            width: 100%;
            margin: 4px 0;
        }
    }
    .payment_option {
        label {
            height: 36px;
            border-radius: 3px;
            font-size: 14px;

            &:after {
                top: 50%;
            }
        }
    }
    .checkout_products {
        width: 100%;
        margin-left: 0;

        .product_header {
            padding: 10px;

            i {
                margin-right: 10px;
            }

            h2 {
                font-size: 18px;
            }
        }

        .product_name {
            width: 85%;
            padding: 5px;

            span {
                font-size: 14px;
            }
        }

        .product_amount {
            width: 15%;
            padding: 0 5px;

            span:first-of-type {
                font-size: 14px;
                font-weight: 600;
                letter-spacing: 2px;
                padding-right: 5px;
            }

            span:last-of-type {
                font-size: 14px;
                letter-spacing: 2px;
                padding-right: 5px;
            }
        }

        .result_footer {
            margin-top: 20px;

            .result_cart {
                padding: 0 5px;

                .footer_title {
                    width: 80%;

                    span {
                        font-size: 14px;
                        font-weight: 500;
                    }
                }

                .total_price {
                    width: 20%;
                    padding: 0 5px 0 0;

                    span {
                        font-size: 14px;
                        font-weight: 500;
                        letter-spacing: 2px;
                    }
                }
            }

            .result_submit {
                margin: 10px 10px 10px auto;
                padding: 5px 10px;

                a {
                    font-size: 14px;
                }
            }
        }
    }
    ::placeholder {
        font-size: 14px;
    }
}

@media screen and (max-width: 667px) {
    .body_content {
        width: 100%;
        padding: 20px;
    }
    .checkout_procedure {
        width: 100%;
    }
    .step_header {
        span {
            padding: 4px 12px;
            text-align: center;
            margin: 0px 18px 6px 6px;
        }

        h2 {
            font-size: 14px;
        }
    }
    .last_step .step_header {
        margin-top: 30px;
    }
    .registered_form {
        margin: 12px 0;
        padding: 12px;
        height: 72px;

        h2 {
            font-size: 12px;
        }

        h3 {
            font-size: 12px;
            height: 46px;
        }
    }
    .col-form-label {
        font-size: 12px;
    }
    .form-control {
        display: block;
        width: 100%;
        border: 1px solid #ebebeb;
        padding: 0 12px;
        box-sizing: border-box;
        height: 32px;
    }
    .shipping_option,
    .payment_option {
        label {
            font-size: 12px;
            font-weight: 550;
        }
    }
    .shpping_delivery,
    .shpping_takeout {
        width: 100%;
        margin: 6px 0;
    }
    input {
        font-size: 12px;
    }
    .delivery_body {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        padding: 8px;

        h5,
        span {
            font-size: 12px;
            width: 70%;
            margin: 0;
        }

        h5 {
            font-weight: 500;
            width: 30%;
        }
    }
    .payment_option {
        .pay_option {
            width: 100%;
            margin: 4px 0;
        }
    }
    .payment_option {
        label {
            height: 36px;
            border-radius: 3px;
            font-size: 12px;

            &:after {
                top: 50%;
            }
        }
    }
    .checkout_products {
        width: 100%;
        margin-left: 0;

        .product_header {
            padding: 10px;

            i {
                margin-right: 10px;
            }

            h2 {
                font-size: 14px;
            }
        }

        .product_name {
            width: 80%;
            padding: 5px;

            span {
                font-size: 12px;
            }
        }

        .product_amount {
            width: 20%;
            padding: 0 5px;

            span:first-of-type {
                font-size: 12px;
                font-weight: 600;
                letter-spacing: 2px;
                padding-right: 5px;
            }

            span:last-of-type {
                font-size: 12px;
                letter-spacing: 2px;
                padding-right: 5px;
            }
        }

        .result_footer {
            margin-top: 20px;

            .result_cart {
                padding: 0 5px;

                .footer_title {
                    width: 70%;

                    span {
                        font-size: 12px;
                        font-weight: 500;
                    }
                }

                .total_price {
                    width: 30%;
                    padding: 0 5px 0 0;

                    span {
                        font-size: 12px;
                        font-weight: 500;
                        letter-spacing: 2px;
                    }
                }
            }

            .result_submit {
                margin: 10px 10px 10px auto;
                padding: 5px 10px;

                a {
                    font-size: 12px;
                }
            }
        }
    }
    ::placeholder {
        font-size: 12px;
    }
}

@media screen and (max-width: 432px) {
    .body_content {
        width: 100%;
        padding: 20px;
    }
    .checkout_procedure {
        width: 100%;
    }
    .step_header {
        span {
            padding: 4px 8px;
            text-align: center;
            margin: 0px 6px 6px 6px;
        }

        h2 {
            font-size: 13px;
        }
    }
    .last_step .step_header {
        margin-top: 30px;
    }
    .registered_form {
        margin: 12px 0;
        padding: 12px;
        height: 72px;

        h2 {
            font-size: 11px;
        }

        h3 {
            font-size: 11px;
            height: 46px;
        }
    }
    .col-form-label {
        font-size: 11px;
    }
    .form-control {
        padding: 0 11px;
    }
    .shipping_option,
    .payment_option {
        label {
            font-size: 11px;
            font-weight: 550;
        }
    }
    .shpping_delivery,
    .shpping_takeout {
        width: 100%;
        margin: 6px 0;
    }
    input {
        font-size: 11px;
    }
    .delivery_body {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        padding: 8px;

        h5,
        span {
            font-size: 11px;
            width: 70%;
            margin: 0;
        }

        h5 {
            font-weight: 500;
            width: 30%;
        }
    }
    .payment_option {
        .pay_option {
            width: 100%;
            margin: 4px 0;
        }
    }
    .payment_option {
        label {
            height: 56px;
            border-radius: 3px;
            font-size: 11px;

            &:after {
                top: 67%;
            }
        }
    }
    .checkout_products {
        width: 100%;
        margin-left: 0;

        .product_header {
            padding: 10px;

            i {
                margin-right: 10px;
            }

            h2 {
                font-size: 13px;
            }
        }

        .product_name {
            width: 80%;
            padding: 5px;

            span {
                font-size: 11px;
            }
        }

        .product_amount {
            width: 20%;
            padding: 0 5px;

            span:first-of-type {
                font-size: 11px;
                font-weight: 600;
                letter-spacing: 2px;
                padding-right: 5px;
            }

            span:last-of-type {
                font-size: 11px;
                letter-spacing: 2px;
                padding-right: 5px;
            }
        }

        .result_footer {
            margin-top: 20px;

            .result_cart {
                padding: 0 5px;

                .footer_title {
                    width: 70%;

                    span {
                        font-size: 11px;
                        font-weight: 500;
                    }
                }

                .total_price {
                    width: 30%;
                    padding: 0 5px 0 0;

                    span {
                        font-size: 11px;
                        font-weight: 500;
                        letter-spacing: 2px;
                    }
                }
            }

            .result_submit {
                margin: 10px 10px 10px auto;
                padding: 5px 10px;

                a {
                    font-size: 11px;
                }
            }
        }
    }
    ::placeholder {
        font-size: 11px;
    }
}
</style>
