window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}

gtag('js', new Date());

gtag('config', 'UA-161575006-1');

// .......scipt vk................
!function () {
    var t = document.createElement("script");
    t.type = "text/javascript", t.async = !0, t.src = "https://vk.com/js/api/openapi.js?167", t.onload = function () {
        VK.Retargeting.Init("VK-RTRG-468381-eNfbj"), VK.Retargeting.Hit()
    }, document.head.appendChild(t)
}();
(function (m, e, t, r, i, k, a) {
    m[i] = m[i] || function () {
        (m[i].a = m[i].a || []).push(arguments)
    };
    m[i].l = 1 * new Date();
    k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
})(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
ym(61199074, "init", {
    clickmap: true,
    trackLinks: true,
    accurateTrackBounce: true,
    webvisor: true,
    trackHash: true
});

