<h2 align="center">Magento 2 | Layout Debug</h2>
  
<div align="center">

![Status](https://img.shields.io/badge/status-active-3eff30.svg)
![Magento 2.\*](https://img.shields.io/badge/magento-2.*-ec6611.svg)
![Version](https://img.shields.io/badge/version-1.0.0-ffbf00.svg)

</div>

<br />

## 📝 Table of Contents
- [Requirements](#-requirements)
- [Installation](#-installation)
- [Features](#-features)
- [Copyright](#-copyright)

<br />

## ⛓️ Requirements
- Magento 2.3.*

<br />

## 🔌 Installation
To *install* this module:
1. `composer config repositories.pykettk/layout-debug git git@github.com:pykettk/layout-debug`
2. `composer require pykettk/layout-debug`
3. `bin/magento module:enable PykettK_LayoutDebug`
4. `bin/magento setup:upgrade`

<br />

To *update* this module:
1. `composer update pykettk/layout-debug`

<br />

To *remove* this module:
1. `composer remove pykettk/layout-debug`

<br />

## ✔️ Features
This module logs the compiled layout XML for a page as it is loaded.
The file is written to Magento's `var/log/` directory under the name `layout.log`.

At present the XML is printed as a single continuous string however prettifying this output is on my
todo list - as is implementing a console command to enable and disable this functionality.

<br />

## &copy; Kiel Pykett
