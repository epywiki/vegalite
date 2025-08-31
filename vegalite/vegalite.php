<?php

namespace Plugins\VegaLite;

use \Typemill\Plugin;

class VegaLite extends Plugin
{
    public static function getSubscribedEvents()
    {
        return array(
            'onTwigLoaded' => 'onTwigLoaded'
        );
    }

    public function onTwigLoaded()
    {
        $vegaSettings = $this->getPluginSettings();

        // Load local JS files (vega, vega-lite, vega-embed)
        $this->addJS('/vegalite/public/vega.min.js');
        $this->addJS('/vegalite/public/vega-lite.min.js');
        $this->addJS('/vegalite/public/vega-embed.min.js');

        /* transform ```vega-lite code blocks into divs */
        $this->addInlineJS('
            document.addEventListener("DOMContentLoaded", function() {
                document.querySelectorAll("code.language-vega-lite").forEach(function(element, index) {
                    var spec = element.innerText;

                    try {
                        var jsonSpec = JSON.parse(spec);
                        var container = document.createElement("div");
                        container.id = "vegalite-" + index;
                        element.parentNode.parentNode.replaceChild(container, element.parentNode);

                        vegaEmbed("#" + container.id, jsonSpec, { actions: false })
                          .catch(console.error);
                    } catch(e) {
                        console.error("Invalid Vega-Lite JSON", e);
                    }
                });
            });
        ');
    }
}

