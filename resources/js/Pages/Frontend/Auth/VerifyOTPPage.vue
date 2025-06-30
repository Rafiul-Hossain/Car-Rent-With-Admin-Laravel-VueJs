<template>
    <Head>
        <title>Car Rent || Verify OTP</title>
    </Head>
    <GuestLayout>
        <!-- inner-apge-banner start -->
        <section class="inner-page-banner bg_img overlay-3"
            style="background-image: url('https://img.freepik.com/free-photo/luxurious-car-parked-highway-with-illuminated-headlight-sunset_181624-60607.jpg?t=st=1740403818~exp=1740407418~hmac=9b14b697ac16ffb732fa29ff849348772d69b200b83c1ff603de1f4ca33cb190&w=1060');">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">Verify OTP</h2>
                        <ol class="page-list">
                            <li>
                                <Link :href="route('show.home')"><i class="fa fa-home"></i> Home</Link>
                            </li>
                            <li>Verify OTP</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner-apge-banner end -->

        <!-- verify otp section start -->
        <section class="login-section pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-6">
                        <div class="login-block text-center">
                            <div class="login-block-inner">
                                <h3 class="title">Enter OTP Code</h3>
                                <p>We've sent a 4-digit code to your email</p>
                                <form class="login-form" @submit.prevent="submit">
                                    <div class="frm-group">
                                        <input 
                                            type="text" 
                                            v-model="form.otp" 
                                            placeholder="Enter 4-digit OTP code" 
                                            class="form-control"
                                            maxlength="4"
                                        />
                                    </div>
                                    <div class="frm-group">
                                        <button type="submit" class="cmn-btn w-100">Verify OTP</button>
                                    </div>
                                </form>
                                <p>
                                    <Link :href="route('show.send.otp')">Resend OTP</Link>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- verify otp section end -->
    </GuestLayout>
</template>

<script setup>
import GuestLayout from '../../../Layouts/GuestLayout.vue';
import { Head, Link, useForm, router } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';

const page = usePage();
const form = useForm({
    otp: ''
});

function submit() {
    if (form.otp.length === 0) {
        alert("OTP Required");
        return;
    }
    
    form.post("/verify-otp", {
        onSuccess: () => {
            if (page.props.flash.status === true) {
                router.get("/reset-password-page");
            } else {
                alert(page.props.flash.message);
            }
        },
        onError: (errors) => {
            if (errors.otp) {
                alert(errors.otp);
            } else {
                alert("Something went wrong. Please try again.");
            }
        }
    });
}
</script>