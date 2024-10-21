"use strict";
var KTCreateAccount = function () {
    var e, t, i, o, s, r, a = [];
    return {
        init: function () {
            (e = document.querySelector("#kt_modal_create_account")) && new bootstrap.Modal(e), t = document.querySelector("#kt_create_account_stepper"), i = t.querySelector("#kt_create_account_form"), o = t.querySelector('[data-kt-stepper-action="submit"]'), s = t.querySelector('[data-kt-stepper-action="next"]'), (r = new KTStepper(t)).on("kt.stepper.changed", (function (e) {
                4 === r.getCurrentStepIndex() ? (o.classList.remove("d-none"), o.classList.add("d-inline-block"), s.classList.add("d-none")) : 5 === r.getCurrentStepIndex() ? (o.classList.add("d-none"), s.classList.add("d-none")) : (o.classList.remove("d-inline-block"), o.classList.remove("d-none"), s.classList.remove("d-none"))
            })), r.on("kt.stepper.next", (function (e) {
                console.log("stepper.next");
                var t = a[e.getCurrentStepIndex() - 1];
                t ? t.validate().then((function (t) {
                    console.log("validated!"), "Valid" == t ? (e.goNext(), KTUtil.scrollTop()) : Swal.fire({
                        text: "Zorunlu alanları doldurup tekrar deneyin",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Tamam",
                        customClass: {confirmButton: "btn btn-light"}
                    }).then((function () {
                        KTUtil.scrollTop()
                    }))
                })) : (e.goNext(), KTUtil.scrollTop())
            })), r.on("kt.stepper.previous", (function (e) {
                console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop()
            })), a.push(FormValidation.formValidation(i, {
                fields: {
                    ad: {validators: {notEmpty: {message: "Bu alan zorunludur"}}},
                    soyad: {validators: {notEmpty: {message: "Bu alan zorunludur"}}},
                    gsm: {validators: {notEmpty: {message: "Bu alan zorunludur"}}},
                    adres: {validators: {notEmpty: {message: "Bu alan zorunludur"}}},
                    email: {
                        validators: {
                            notEmpty: {message: "Bu alan zorunludur"},
                            emailAddress: {message: "Bu geçerli bir e-posta adresi değildir"}
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), a.push(FormValidation.formValidation(i, {
                fields: {
                    etkinlik_tarihi: {validators: {notEmpty: {message: "Bu alan zorunludur"}}},
                    account_name: {validators: {notEmpty: {message: "Account name is required"}}},
                    account_plan: {validators: {notEmpty: {message: "Account plan is required"}}}
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), a.push(FormValidation.formValidation(i, {
                fields: {
                    mekan_id: {validators: {notEmpty: {message: "Bu alan zorunludur"}}},
                    salon_id: {validators: {notEmpty: {message: "Bu alan zorunludur"}}},
                    business_type: {validators: {notEmpty: {message: "Busines type is required"}}},
                    business_description: {validators: {notEmpty: {message: "Busines description is required"}}}
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), a.push(FormValidation.formValidation(i, {
                fields: {
                    dogrulama_ok: {validators: {notEmpty: {message: "Bu alan zorunludur"}}},
                    card_number: {
                        validators: {
                            notEmpty: {message: "Card member is required"},
                            creditCard: {message: "Card number is not valid"}
                        }
                    },
                    card_expiry_month: {validators: {notEmpty: {message: "Month is required"}}},
                    card_expiry_year: {validators: {notEmpty: {message: "Year is required"}}},
                    card_cvv: {
                        validators: {
                            notEmpty: {message: "CVV is required"},
                            digits: {message: "CVV must contain only digits"},
                            stringLength: {min: 3, max: 4, message: "CVV must contain 3 to 4 digits only"}
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            })), o.addEventListener("click", (function (e) {
                a[3].validate().then((function (t) {
                    console.log("validated!"), "Valid" == t ? (e.preventDefault(), o.disabled = !0, o.setAttribute("data-kt-indicator", "on"), setTimeout((function () {
                        o.removeAttribute("data-kt-indicator"), o.disabled = !1, r.goNext()
                    }), 2e3)) : Swal.fire({
                        text: "Doğrulama yanlış!",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Tamam",
                        customClass: {confirmButton: "btn btn-light"}
                    }).then((function () {
                        KTUtil.scrollTop()
                    }))
                }))
            })), $(i.querySelector('[name="card_expiry_month"]')).on("change", (function () {
                a[3].revalidateField("card_expiry_month")
            })), $(i.querySelector('[name="card_expiry_year"]')).on("change", (function () {
                a[3].revalidateField("card_expiry_year")
            })), $(i.querySelector('[name="business_type"]')).on("change", (function () {
                a[2].revalidateField("business_type")
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTCreateAccount.init()
}));
