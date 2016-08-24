-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2016-08-24 06:27:40.511

-- tables
-- Table: Book
CREATE TABLE Book (
    CategoryID int  NOT NULL,
    BookID int  NOT NULL,
    Title char(100)  NOT NULL,
    ISBN char(20)  NOT NULL,
    publisher_id int  NOT NULL,
    publisher_date date  NOT NULL,
    Authors char(50)  NOT NULL,
    Entered_date date  NOT NULL,
    quantity text  NOT NULL,
    Unitprice money  NOT NULL,
    brief char(100)  NOT NULL,
    publisher_publisherid int  NOT NULL,
    Category_CategoryID int  NOT NULL,
    CONSTRAINT Book_pk PRIMARY KEY  (CategoryID)
);

-- Table: Category
CREATE TABLE Category (
    CategoryID int  NOT NULL,
    Name nvarchar(100)  NOT NULL,
    RenderOrder text  NOT NULL,
    CONSTRAINT Category_pk PRIMARY KEY  (CategoryID)
);

-- Table: publisher
CREATE TABLE publisher (
    publisher_id int  NOT NULL,
    Name char(10)  NOT NULL,
    website char(100)  NOT NULL,
    address char(100)  NOT NULL,
    CONSTRAINT publisher_pk PRIMARY KEY  (publisher_id)
);

-- foreign keys
-- Reference: Book_Category (table: Book)
ALTER TABLE Book ADD CONSTRAINT Book_Category
    FOREIGN KEY (Category_CategoryID)
    REFERENCES Category (CategoryID);

-- Reference: Book_publisher (table: Book)
ALTER TABLE Book ADD CONSTRAINT Book_publisher
    FOREIGN KEY (publisher_publisherid)
    REFERENCES publisher (publisher_id);

-- End of file.

