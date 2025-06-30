<template>
    <Head>
        <title>Car Rent || Login</title>
    </Head>
    <GuestLayout>
        <!-- inner-apge-banner start -->
        <section class="inner-page-banner bg_img overlay-3"
            style="background-image: url('https://img.freepik.com/free-photo/luxurious-car-parked-highway-with-illuminated-headlight-sunset_181624-60607.jpg?t=st=1740403818~exp=1740407418~hmac=9b14b697ac16ffb732fa29ff849348772d69b200b83c1ff603de1f4ca33cb190&w=1060');">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">login</h2>
                        <ol class="page-list">
                            <li>
                                <Link :href="route('show.home')"><i class="fa fa-home"></i> Home</Link>
                            </li>
                            <li>login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner-apge-banner end -->

        <!-- login-section start -->
        <section class="login-section pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="login-block text-center">
                            <div class="login-block-inner">
                                <h3 class="title">login your account </h3>
                                <form class="login-form" @submit.prevent="UserLogin">
                                    <div class="frm-group">
                                        <input type="email" placeholder="Enter your email" v-model="form.email">
                                    </div>
                                    <div class="frm-group">
                                        <input type="password" placeholder="Your Password" v-model="form.password">
                                    </div>
                                    <div class="frm-group">
                                       <button type="submit" class="cmn-btn w-100">Submit</button>
                                    </div>
                                </form>
                                <p>
                                    <Link :href="route('show.user.registration')">Haven't your any account in here?</Link>
                                    <span class="mx-2">|</span>
                                    <Link :href="route('show.send.otp')">Forgot password?</Link>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- login-section end -->
    </GuestLayout>
</template>

<script setup>
import GuestLayout from '../../../Layouts/GuestLayout.vue';
import { Head, Link, useForm, router } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';

const page = usePage();
const form = useForm({
    email: '',
    password: ''
});

function UserLogin() {
    if (form.email.length === 0) {
        alert("Email Required");
        return;
    } else if (form.password.length === 0) {
        alert("Password Required");
        return;
    }
    
    form.post("/user-login", {
        onSuccess: () => {
            if (page.props.flash.status === true) {
                router.get("/");
            } else {
                alert(page.props.flash.message);
            }
        },
        onError: (errors) => {
            if (errors.email) {
                alert(errors.email);
            } else if (errors.password) {
                alert(errors.password);
            } else {
                alert("Something went wrong. Please try again.");
            }
        }
    });
}
</script>