### ToDo For this Week

-   [*] Show the lastest cart _( for the logged in user )_ -> # ( سه شنبه 27 آذر) #
-   [*] Seprate the views and create a layout for user side _( Check the admin panel too )_
-   [*] Fix the search method
-   [*] Create a delete method for shopping cart -----> متد حذف مونده با یه باگ تو بخش بلید کریت
-   [*] Add categories update to product edit method
-   [*] Show create shopping cart to _( User if he/her dose not have a cart or all of his/her carts are closed )_
-   [*] Edite profile method for users _( User could not give himself/herself role )_ --------------------------------------------------------|
    |
    |
    |
    |
    |
    |
    _[{ افزودن قابلیت تغیر رمز }]_ <------------------------------|

-   [*] Edite method for categories in admin panel-----------------------------|
    |
    |
    |
    _{{ یه باگ تو آخرای کار مونده }}_ <-----------|

-   [*] Change all of the numbers format to int _( except mobile )_
-   [*]فیکس کردن سفارشات

### 2025 Todo for DemonShop

-   [] افزودن بخش تیکت <--------------------------------------------------------------------------------|
    -   [*] ساخت جدول در دیتا بیس                                                                       |
        - [*] اجزای جدول <--------------------------------------------------|                           |
                                                                            |                           |
                                                                            |                           |
                                                                            |                           |
                                                                            |                           |
                                                                            |                           |
                                                                            |                           |
                                                                            |                           |
                                                                            |                           |
                                                                            |                           |
                                                                            |                           |
                                                                            |                           |   
                                                                            |                           |
                                                                            |                           |
                                                                            |                           |
        id => **{{ Primary key }}**                                         |                           |
        user_id => **{{ Foreign key for the user creating the ticket }}**   |                           |
        title => **{{ Ticket title }}**                                     |                           |       
        status => **{{ Enum _(open, in-progress, closed)_ }}**              |                           |
        category_id => **{{ Foreign key for category }}**                   |                           |
        attachment => **{{ File path for attachments }}**                   |                           |
        Timestamps => **{{ created_at, updated_at }}**                      |                           |       
                                                                            |                           |
                           /|\                                              |                           |
                            |                                               |                           |
                            |                                               |                           |
                            |                                               |                           |
                            |-----------------------------------------------|                           |
                                                                                                        |
                                                                                                        |
                                                                                                        |
    - [++] ساخت متد ها **( <store> , <index> , <show> , <update> , <destroy> , <changeStatus> )** <-----|
                               
        - [] ساخت بخش فرانت صفحات  
        - [] ساخت رووت ها برای متد های تیکت
    - [*] ساخت مدل های تیکت ( <User> , <Category> , <Ticket> )
    - [*] ساخت جدول پیام های تیکت در دیتا بیس <-----------------------------------------------------------|
|         id => **{{ primery key }}**                                                                     |
|         admin_id => **{{ id of admin chated with user <Defult = UserOne > }}**                          |
|         chat => **{{ content of user and admin's chat }}**                                              |                                            
|                                                                                                         |
|                                                                                                         |
|---------------------------------------------------------------------------------------------------------|










-   [] افزودن بخش کامنت
    - [] ساخت جدول کامنت ها <---------------------------|
                                                        |
        id => **{{ primery key }}**                     |
        user_id => **{{ foreign key }}**                |
        product-id => **{{ foreigin key }}**            |
        content => **{{ comment text }}**               |
        Timestamp => **{{ created_at , updated_at }}**  |
                                                        |
                                                        |
                                                        |
                                                        |
      --------------------------------------------------|

    - [] ساخت مدل کامنت و اتصال آن به محصولات
    - [] ساخت متد هایایندکس و استور
    - [] افزودن رووت ها
    - [] استفاده از کپچا برای جلوگیری از اسپم
    - [] نوشتن صفحه کامنت ها یا افزودن بخش کامنت ها به صفحه جزعیات محصول


Will Updated -----------|
                        |
                        |
                        |
                       \|/
-   [] افزودن بخش تاریخچه خرید

-   [] افزودن بخش نمره دهی با ستاره












