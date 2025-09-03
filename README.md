# Vega-Lite Typemill Plugin

The **Vega-Lite Typemill plugin** brings powerful data visualization capabilities to Typemill CMS. It is heavily inspired by the **Mermaid plugin**, offering a simple way to embed Vega-Lite charts directly in your content.

## Features
- Embed **Vega-Lite charts** using JSON syntax.
- Supports **bar charts, line charts, scatter plots, and more**.
- Seamless integration with Typemill CMS content.

## Usage

You can embed a Vega-Lite chart using the following syntax:

```vega-lite
{
  "$schema": "https://vega.github.io/schema/vega-lite/v5.json",
  "data": {
    "values": [
      {"a": "A", "b": 28},
      {"a": "B", "b": 55},
      {"a": "C", "b": 43}
    ]
  },
  "mark": "bar",
  "encoding": {
    "x": {"field": "a", "type": "ordinal"},
    "y": {"field": "b", "type": "quantitative"}
  }
}
```
### Installation
Download the plugin files.

Upload them to your Typemill plugins directory.

Activate the plugin via the Typemill admin panel.

### Documentation

For more details on Vega-Lite chart specifications, visit the Vega-Lite Documentation

Enhance your Typemill content with interactive and customizable data visualizations effortlessly!
