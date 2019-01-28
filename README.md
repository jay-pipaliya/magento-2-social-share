# Magento 2 Social Share extension

[Social Share by Mageplaza](http://www.mageplaza.com/magento-2-social-share/) is a helpful extension which supports customers to share their shopping experience quickly to their social channels right from the current shopping page. This is also a proper solution to increase traffic to a shopping site, promote store brand and improve site ranking effectively.   


## 1. Documentation
- [Installation guide](https://www.mageplaza.com/install-magento-2-extension/)
- [User guide](https://docs.mageplaza.com/social-share/index.html)
- [Introduction page](http://www.mageplaza.com/magento-2-social-share/)
- [Contribute on Github](https://github.com/mageplaza/magento-2-social-share)
- [Get Support](https://github.com/mageplaza/magento-2-social-share/issues)


## 2. FAQ

**Q: I got error: Mageplaza_Core has been already defined**

A: Read solution: https://github.com/mageplaza/module-core/issues/3

**Q: How many sharing button can I place on the page?**

A: There is no limitation. Because the button “+” is supported to allow displaying a list of up to 230 services.

**Q: Which position on a page can I place the sharing button block?**

A: You can place it with Floating type (on the left/ right of the page), Inline type (on the top/ at the bottom of page content)

**Q: How can I design the appearance of sharing button?**

A: From the admin backend, you can select the color for icon, button, and block background easily. Besides, you can upload the image as a button icon

**Q: How can I know the number of shares?**

A: Kindly enable the share counter from admin backend. The number of shares will appear. 

**Q: I would like a thank you or success message appearing after a customer shares a link?**

A: Kindly enable Thank-you popup from the admin backend. 
 

## 3. How to install Social Share extension for Magento 2

Install via composer (recommend): Run the following command in Magento 2 root folder:

```
composer require mageplaza/module-social-share
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

## 4. Highlight Features 

### Integrate multiple social channels on shopping site

#### Encourage customers to share on unlimited social channels

Multiple social sharing buttons are placed vividly on shopping sites which motivate customers to click for sharing their shopping experience with friends anytime. 

The popular icons of famous channels like Facebook, Twitter, Google+, LinkedIn will appear right on Home Page, Category Page and Product Page

![Imgur](https://i.imgur.com/32TeRc4.png)

#### Market your products easily via customers

Your friends share a Tshirt with a link from a store on Facebook, and you and the others can instantly know about this product as well as the store site. This is an effective way in which Social Share is used to expose the brand as well as products indirectly via customers’ sharing. 


### Floating and Inline display styles

The display style of sharing buttons can be selected with various choices including 2 Inline styles and 2 Floating styles. 

In Floating styles, sharing buttons can be placed to the left or to the right of the selected pages. In Inline styles, sharing buttons will appear on the top/ at the bottom of the content, or under Add-to-Cart button. 

![Imgur](https://i.imgur.com/32TeRc4.png)

### Beautify sharing buttons with ease

#### Customizable sharing buttons

The appearance of sharing button can be beautifully customized with the selection of icon color, button color, background color, button size and border radius. Let’s make sharing buttons eye-catching to appeal to customers with ease! 

#### Easy to upload your own sharing button icon

Also, with just one click, admins can upload an image to set as the icon for a sharing button easily. Sharing buttons now not only match store themes but also are attractive than ever! 

![Imgur](https://i.imgur.com/MQlBOjE.png)


### Display Share buttons on any pages (coming soon)
Placing sharing buttons easily on any positions on any pages with the support of snippet. Three snippet types including widget, block and PHP code will help to sharing buttons to be displayed flexibly for specific purposes. 

## 5. More Features

### Share counter

Display the number of sharing 

### Thank-you popup

Display the thank-you message after customers’ sharing 

### Mobile friendly 

Be well responsive with mobiles, desktop, tablets, and other screen sizes.

## 6. Full Feature Lists

### For admins

#### General Configuration

- Enable/ Disable the module
- Choose icon/button/background color of sharing buttons
- Input percent for border radius
- Enable/ Disable share counter
- Enable Thank-you Popup after share action
- Upload icons for buttons

#### Floating configuration
- Choose pages to apply floating types
- Choose floating styles: Horizontal or Vertical 
- Set margin top 
- Set button size 

#### Inline Configuration
- Choose pages to apply inline types for sharing buttons
- Select inline styles: Top content and Bottom content Allow showing sharing buttons under Add-to-Cart button on Product Page 
- Set button size


### For customers

- Share favorite pages or favored products quickly during on shopping site. 
- Easy to know recommended shopping pages/ items via social channels.   
- Be more trusted on products thanks to the other ’s social sharing. 
- Have better shopping experience

## 7. User Guide

### How to configure

#### 7.1. Configuration

Login to the **Magento Admin**, choose `Store > Configuration > Mageplaza > Social Share`.

![Imgur](https://i.imgur.com/mN1BqA9.gif)

**General configuration**

- **Enable**: Select “Yes” to enable the module.
- **Icon Color**: 
  - Select available colors for the icon of sharing button. Note that only apply for the default icon.
  - If select `Custom`,  the color table will appear for much more choices. 
- **Button Color**: 
  - Select available colors for sharing button. Note that only apply for the default icon.
  - If select `Custom`,  the color table will appear for much more choices.  
- **Background Color**: 
  - Select color for background . Note that only apply for the default icon.
  - If select `Custom`,  the color table will appear for much more choices. 
- **Border Radius**: Input value for Border Radius, ranging from 0% - 50% (0% for square, 50% for circle).
- **Enable Share Counter**: Select `Yes` to display the number of shares 
- **Enable Thank You Popup**: Select `Yes` to display Thank You popup after sharing.
 
![Imgur](https://i.imgur.com/NJ7mjHf.png)

![Imgur](https://i.imgur.com/xP4A77K.png)

![Imgur](https://i.imgur.com/4VpFVuN.png)

- **Enable**: Select `Yes` to turn on this sharing service.
- **Image**: Click `Choose File` button to upload file image.

![Imgur](https://i.imgur.com/fOEIGcx.png)

- **Enable**: Select `Yes`  to allow displaying more services and display icon “+” to show services.
- **Display Menu Type**: Select type to display sharing menu:
- **Hover**: Move the mouse to the icon then the list will appear
- **Click**:  Click on the icon then the list will appear.
- **Number Of Services**: 
  - Input the number of services which will appear after clicking on the icon “+”.
  - If leave blank, the default number of API will be around 230 services. 

#### 7.2. Floating Configuration

![Imgur](https://i.imgur.com/29V2keg.png)

- **Apply For**: 
  - Select the page to apply Floating type
  - Allow multiple select.
- **Style**: Select styles of Floating type:
  - **Horizontal**: Icons will be arranged horizontally
  - **Vertical**: Icons will be arranged vertically
- **Position**: Select position of sharing button block on screen:
  - **Left**: Icons will appear to the left of the page
  - **Right**: Icons will appear to the right of the page
- **Margin Top**:
  - Select the margin for the top of icon block.
  - If leave blank, default is 150px
- **Button Size**: Select size for sharing icon in pixel:

![Imgur](https://i.imgur.com/swrqLjo.png)

#### 7.3. Inline Configuration

![Imgur](https://i.imgur.com/tOJafMD.png)

- **Apply For**: 
  - Select the page to apply Inline type
  - Allow multiple select.
- **Position**: Select the position of icon block:
  - **Top content**: Icon will appear on the top of content 
  - **Bottom content**: Icon will appear at the bottom of content 
- **Show under Add To Cart on Product Detail Page**: Select `Yes` to display under `Add To Cart` button on Product Detail Page.
- **Button Size**: Select size for icon in pixel:


![Imgur](https://i.imgur.com/t8StQsu.png)
