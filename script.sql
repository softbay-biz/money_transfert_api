create table payments
(
    id             int auto_increment
        primary key,
    product_id     int(10)      not null,
    txn_id         varchar(200) not null,
    payment_gross  float(10, 2) not null,
    currency_code  varchar(5)   not null,
    payer_id       varchar(20)  not null,
    payer_name     varchar(50)  not null,
    payer_email    varchar(50)  not null,
    payer_country  varchar(5)   not null,
    payment_status varchar(10)  not null,
    created        datetime     not null
);

create table products
(
    id       int auto_increment
        primary key,
    name     varchar(255)              not null,
    image    varchar(255)              not null,
    price    float(10, 2)              not null,
    currency varchar(10) default 'USD' not null,
    status   tinyint(1)  default 1     not null comment '1=Active, 0=Inactive'
);


