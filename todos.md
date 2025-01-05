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
    -   [] ساخت جدول در دیتا بیس                                                                        |
        - [] اجزای جدول <---------------------------------------------------|                           |
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
        description => **{{ Ticket details }}**                             |                           |
        priority => **{{ Enum _(low, medium, high)_ }}**                    |                           |
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
    - [] ساخت متد ها **( <store> , <index> , <show> , <update> , <destroy> , <changeStatus> )** <-------|
                                                    |
                                                    |
                                                    |
                                                    |
                                                   \|/
                      **( <search> , <uploadAttachment> , <addContent> , <export> )**  
        - [] ساخت رووت ها برای متد های تیکت
    - [] ساخت مدل های تیکت ( <User> , <Category> , <Ticket> )










    
                                                                              
-   [] افزودن بخش کامنت
    -   [] ساخت مدل کامنت و اتصال آن به محصولات
    -   [] نوشتن صفحه کامنت ها یا افزودن بخش کامنت ها به صفحه جزعیات محصول
-   [] افزودن بخش تاریخچه خرید
-   [] افزودن بخش نمره دهی با ستاره
