@extends("layouts.app")

<div class="full-width full-height valign-wrapper">
    <div class="full-width center-align">
        <h5 class="grey-text secondary-font">Goodbye</h5>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        heap.resetIdentity();
        window.location.href = "/login";
    });
</script>
