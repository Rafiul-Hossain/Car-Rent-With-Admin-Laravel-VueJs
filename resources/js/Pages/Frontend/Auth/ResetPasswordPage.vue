<template>
    <Head>
        <title>Car Rent || Reset Password</title>
    </Head>
    <GuestLayout>
        <!-- inner-apge-banner start -->
        <section class="inner-page-banner bg_img overlay-3"
            style="background-image: url('https://img.freepik.com/free-photo/luxurious-car-parked-highway-with-illuminated-headlight-sunset_181624-60607.jpg?t=st=1740403818~exp=1740407418~hmac=9b14b697ac16ffb732fa29ff849348772d69b200b83c1ff603de1f4ca33cb190&w=1060');">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title">Reset Password</h2>
                        <ol class="page-list">
                            <li>
                                <Link :href="route('show.home')"><i class="fa fa-home"></i> Home</Link>
                            </li>
                            <li>Reset Password</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner-apge-banner end -->

        <!-- reset password section start -->
        <section class="login-section pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-6">
                        <div class="login-block text-center">
                            <div class="login-block-inner">
                                <h3 class="title">Set New Password</h3>
                                <form class="login-form" @submit.prevent="submit">
                                    <div class="frm-group">
                                        <input 
                                            type="password" 
                                            v-model="form.password" 
                                            placeholder="New Password" 
                                            class="form-control"
                                        />
                                    </div>
                                    <div class="frm-group">
                                        <input 
                                            type="password" 
                                            v-model="form.cpassword" 
                                            placeholder="Confirm Password" 
                                            class="form-control"
                                        />
                                    </div>
                                    <div class="frm-group">
                                        <button type="submit" class="cmn-btn w-100">Reset Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- reset password section end -->
    </GuestLayout>
</template>

<script setup>
import GuestLayout from '../../../Layouts/GuestLayout.vue';
import { Head, Link, useForm, router } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';

const page = usePage();
const form = useForm({
    password: '',
    cpassword: ''
});

function submit() {
    if (form.password.length === 0) {
        alert("Password Required");
        return;
    } else if (form.cpassword.length === 0) {
        alert("Confirm Password Required");
        return;
    } else if (form.password !== form.cpassword) {
        alert("Passwords do not match");
        return;
    }
    
    form.post("/reset-password", {
        onSuccess: () => {
            if (page.props.flash.status === true) {
                router.get("/user-login");
            } else {
                alert(page.props.flash.message);
            }
        },
        onError: (errors) => {
            if (errors.password) {
                alert(errors.password);
            } else if (errors.cpassword) {
                alert(errors.cpassword);
            } else {
                alert("Something went wrong. Please try again.");
            }
        }
    });
}
</script>