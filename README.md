# Tourlast Landing Page – Popular Attractions Section

## Overview
This project contains the landing page for Tourlast. Once you pull you should be able to run it and see this.

Clone it then do:
composer install on the project
then change or create the .env file 
then run composer dump-autoload
 
The **Popular Attractions** section is a key feature on the Tourlast landing page, designed to showcase curated hotel options and encourage user engagement. This section aims to highlight popular, highly-rated hotels worldwide in an interactive, visually appealing format.

---

## Section Requirements

### 1. Card Layout

Each hotel should be displayed as a **card** with the following information:

- Hotel name
- Rating (stars)
- Number of reviews
- Minimum price (starting price)
- Thumbnail image of the hotel
- Bonus: like/favorite button for user interaction

**Notes:**

- Cards should maintain a consistent height and width to ensure a visually cohesive grid or carousel layout.

---

### 2. Interactive Carousel/Grid

The card section should support either:

- **Horizontal carousel/slider**, allowing users to scroll through multiple cards
- **Responsive grid layout**, adjusting the number of visible cards based on screen size

Additional requirements:

- Include **navigation arrows** to allow users to browse left/right in a carousel
- Support **touch gestures** for mobile devices

---

### 3. Design & Visual Guidelines (Bonus)

- Highlight key details prominently:
  - Hotel name and rating should be visible at first glance
  - Price should be clearly displayed
- Include subtle hover effects:
  - Card shadow or scale on hover
  - Highlight rating stars or "favorite" button
- Maintain alignment with **Tourlast branding** (colors, typography, and iconography)

---

### 4. Responsiveness

The section must be fully responsive. We give you the liberty to implement responsiveness as you wish. During the interview we will ask you how you implemented this.

---

### 5. Optional Enhancements

- Display badges for “Popular” or “Top Rated” hotels
- Implement smooth transition animations for carousel movements

---

## Data Integration

The section should pull hotel data via **JSON** for testing. JSON files will be provided, and setting them up is part of the assessment.

**Example fields:**

- `hotel_name`
- `rating_star`
- `reviews_count` → use a random generator for this
- `minimum_price`
- `thumbnail`

**Notes (Bonus):**

- Ensure proper handling when no data is available:
  - Display placeholders or fallback messages/images

- It's ok if you do not finish everything within the set time. We want to see how far you can go.

---

**Good luck!**
