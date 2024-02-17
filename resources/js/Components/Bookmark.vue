<template>
    <div class="bookmark icon top-0 position-absolute z-100"></div>
</template>
<style>
.bookmark.icon {
    color: #000;
    position: absolute;
    margin-left: 500px;
    margin-top: 300px;
    width: 30px; /* Adjusted width */
    height: 50px; /* Adjusted height proportionally */
    border-radius: 0 0 1px 1px;
    box-sizing: border-box;
    border-top: solid 4px currentColor; /* Adjusted border thickness */
    border-left: solid 4px currentColor; /* Adjusted border thickness */
    border-right: solid 4px currentColor; /* Adjusted border thickness */
    z-index: 100;
}

.bookmark.icon:before {
    content: "";
    position: absolute;
    top: 33px; /* Adjusted top position proportionally */
    left: 0px; /* Adjusted left position proportionally */
    width: 22.5px; /* Adjusted width proportionally */
    height: 22.5px; /* Adjusted height proportionally */
    border-radius: 0 0 6px 6px; /* Adjusted border-radius */
    z-index: -1;
    border-top: solid 4px currentColor; /* Adjusted border thickness */
    border-left: solid 4px currentColor; /* Adjusted border thickness */
    -webkit-transform: rotate(48deg);
    transform: rotate(45deg);
    z-index: 100;
}
</style>
