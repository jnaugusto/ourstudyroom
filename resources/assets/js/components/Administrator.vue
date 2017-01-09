<template>
    <div class="content-container">
        <div class="ui segment override wrapper general-body content custom-design">

            <!-- admin Table -->
            <div class="ui segment loaders general-body-content content-body">
                <div class="ui inverted dimmer">
                    <div class="ui text loader">Loading</div>
                </div>
                <div class="content-body-form">
                    <div class="content-body-form-header">
                        <small class="top-text"><i class="wait icon"></i>Showing 10 out of 20 users.</small>
                        <div class="top-title">Administrator</div>
                        <small>One administrator in the list cannot be deleted.</small>
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
                    </div>
                    <div class="margin-height"></div>
                    <div class="ui four column doubling stackable grid custom">
                        <div class="column">
                            <div class="panel">
                                <div class="top">
                                    <img class="ui tiny circular image" :src="root_url + 'images/profile_images/1474943470659.jpg'">
                                    <strong>Jess Noel Augusto</strong>
                                    <label class="email">jessnoelaugusto@gmail.com</label>
                                </div>
                                <div class="bottom">
                                    <div class="ui mini buttons custom">
                                        <button class="ui button">
                                            <i class="search icon"></i>
                                            View
                                        </button>
                                        <button class="ui button">
                                            <i class="edit icon"></i>
                                            Edit
                                        </button>
                                        <button class="ui button">
                                            <i class="trash icon"></i>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="panel">
                                <div class="top">
                                    
                                </div>
                                <div class="bottom">
                                    <div class="ui mini buttons custom">
                                        <button class="ui button">
                                            <i class="search icon"></i>
                                            View
                                        </button>
                                        <button class="ui button">
                                            <i class="edit icon"></i>
                                            Edit
                                        </button>
                                        <button class="ui button">
                                            <i class="trash icon"></i>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="panel">
                                <div class="top">
                                    
                                </div>
                                <div class="bottom">
                                    <div class="ui mini buttons custom">
                                        <button class="ui button">
                                            <i class="search icon"></i>
                                            View
                                        </button>
                                        <button class="ui button">
                                            <i class="edit icon"></i>
                                            Edit
                                        </button>
                                        <button class="ui button">
                                            <i class="trash icon"></i>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="panel">
                                <div class="top">
                                    
                                </div>
                                <div class="bottom">
                                    <div class="ui mini buttons custom">
                                        <button class="ui button">
                                            <i class="search icon"></i>
                                            View
                                        </button>
                                        <button class="ui button">
                                            <i class="edit icon"></i>
                                            Edit
                                        </button>
                                        <button class="ui button">
                                            <i class="trash icon"></i>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="panel">
                                <div class="top">
                                    
                                </div>
                                <div class="bottom">
                                    <div class="ui mini buttons custom">
                                        <button class="ui button">
                                            <i class="search icon"></i>
                                            View
                                        </button>
                                        <button class="ui button">
                                            <i class="edit icon"></i>
                                            Edit
                                        </button>
                                        <button class="ui button">
                                            <i class="trash icon"></i>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="panel">
                                <div class="top">
                                    
                                </div>
                                <div class="bottom">
                                    <div class="ui mini buttons custom">
                                        <button class="ui button">
                                            <i class="search icon"></i>
                                            View
                                        </button>
                                        <button class="ui button">
                                            <i class="edit icon"></i>
                                            Edit
                                        </button>
                                        <button class="ui button">
                                            <i class="trash icon"></i>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="panel">
                                <div class="top">
                                    
                                </div>
                                <div class="bottom">
                                    <div class="ui mini buttons custom">
                                        <button class="ui button">
                                            <i class="search icon"></i>
                                            View
                                        </button>
                                        <button class="ui button">
                                            <i class="edit icon"></i>
                                            Edit
                                        </button>
                                        <button class="ui button">
                                            <i class="trash icon"></i>
                                            Delete
                                        </button>
                                    </div>
                                </div>
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
