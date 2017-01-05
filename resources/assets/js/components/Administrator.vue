<template>
    <div class="content-container">
        <div class="ui segment override wrapper general-body content custom-design">

            <!-- admin Table -->
            <div class="ui segment loaders general-body-content content-body">
                <div class="ui inverted dimmer">
                    <div class="ui text loader">Loading</div>
                </div>
                <div class="content-body-form">
                    <small>Note: You can search for an ID, Name, Username or Email.</small>
                    <div class="search-options">
                        <button class="ui icon button white override icon-only">
                            <i class="refresh icon"></i>
                        </button>
                        <div class="ui input custom-border">
                            <input placeholder="Search..." type="text" class="search-input">
                        </div>
                        <div class="ui icon top right pointing dropdown button teal override icon-only record-count">
                            <i class="options icon"></i>
                        </div>
                    </div>
                    <div class="ui cards">
                        <div class="card custom">
                            <div class="image">
                                <img :src="root_url + '/images/profile_images/1476167618882.jpg'">
                            </div>
                            <div class="content">
                                <div class="header">Are yousure</div>
                                <div class="meta">
                                    <span class="category">Administrator</span>
                                </div>
                            </div>
                            <div class="extra content">
                                <button class="ui mini fluid teal button override view-button">View Details</button>
                            </div>
                        </div>
                        <div class="card custom">
                            <div class="image">
                                <img :src="root_url + '/images/profile_images/1476167618882.jpg'">
                            </div>
                            <div class="content">
                                <div class="header">Are yousure</div>
                                <div class="meta">
                                    <span class="category">Administrator</span>
                                </div>
                            </div>
                            <div class="extra content">
                                <button class="ui mini fluid teal button override view-button">View Details</button>
                            </div>
                        </div>
                        <div class="card custom">
                            <div class="image">
                                <img :src="root_url + '/images/profile_images/1476167618882.jpg'">
                            </div>
                            <div class="content">
                                <div class="header">Are yousure</div>
                                <div class="meta">
                                    <span class="category">Administrator</span>
                                </div>
                            </div>
                            <div class="extra content">
                                <button class="ui mini fluid teal button override view-button">View Details</button>
                            </div>
                        </div>
                        <div class="card custom">
                            <div class="image">
                                <img :src="root_url + '/images/profile_images/1476167618882.jpg'">
                            </div>
                            <div class="content">
                                <div class="header">Are yousure</div>
                                <div class="meta">
                                    <span class="category">Administrator</span>
                                </div>
                            </div>
                            <div class="extra content">
                                <button class="ui mini fluid teal button override view-button">View Details</button>
                            </div>
                        </div>
                        <div class="card custom">
                            <div class="image">
                                <img :src="root_url + '/images/profile_images/1476167618882.jpg'">
                            </div>
                            <div class="content">
                                <div class="header">Are yousure</div>
                                <div class="meta">
                                    <span class="category">Administrator</span>
                                </div>
                            </div>
                            <div class="extra content">
                                <button class="ui mini fluid teal button override view-button">View Details</button>
                            </div>
                        </div>
                        <div class="card custom">
                            <div class="image">
                                <img :src="root_url + '/images/profile_images/1476167618882.jpg'">
                            </div>
                            <div class="content">
                                <div class="header">Are yousure</div>
                                <div class="meta">
                                    <span class="category">Administrator</span>
                                </div>
                            </div>
                            <div class="extra content">
                                <button class="ui mini fluid teal button override view-button">View Details</button>
                            </div>
                        </div>
                        <div class="card custom">
                            <div class="image">
                                <img :src="root_url + '/images/profile_images/1476167618882.jpg'">
                            </div>
                            <div class="content">
                                <div class="header">Are yousure</div>
                                <div class="meta">
                                    <span class="category">Administrator</span>
                                </div>
                            </div>
                            <div class="extra content">
                                <button class="ui mini fluid teal button override view-button">View Details</button>
                            </div>
                        </div>
                        <div class="card custom">
                            <div class="image">
                                <img :src="root_url + '/images/profile_images/1476167618882.jpg'">
                            </div>
                            <div class="content">
                                <div class="header">Are yousure</div>
                                <div class="meta">
                                    <span class="category">Administrator</span>
                                </div>
                            </div>
                            <div class="extra content">
                                <button class="ui mini fluid teal button override view-button">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="pagination-wrapper">
                <div class="card custom">
                            <div class="image">
                                <img :src="root_url + '/images/profile_images/1476167618882.jpg'">
                            </div>
                            <div class="content">
                                <div class="header">Are yousure</div>
                                <div class="meta">
                                    <span class="category">Administrator</span>
                                </div>
                            </div>
                            <div class="extra content">
                                <button class="ui mini fluid teal button override view-button">View Details</button>
                            </div>
                        </div>
            </div>-->
        </div>
    </div>
</template>

<script>

    export default {

        parent: Dashboard.app,

        data() {
            return {
                root_url: window.url_rootDIR,
            }
        },

        mounted() {

            // Enable dropdown
            $('.ui.dropdown').dropdown();

            // Hide modals
            $('.user-modal').hide();

            $(".dashboard-right .body-right .general-body.content .content-body").mCustomScrollbar({
                scrollButtons:{enable:true},
                theme:"dark-3",
                scrollbarPosition:"inside",
                mouseWheel:{ enable: true },
            });

        }

    }

</script>
