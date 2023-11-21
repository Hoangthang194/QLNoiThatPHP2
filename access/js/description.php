<script>
    
const activeDes = document.querySelector('.container-modal')
const description = {
    
    handleSlider: function(){
        const nextBtn = document.querySelector('.next-btn');
        const preBtn = document.querySelector('.pre-btn');
        let lists = document.querySelectorAll('.img-sub');
        lists[0].classList.add('active');
        nextBtn.onclick = ()=>{
                let lists = document.querySelectorAll('.img-sub');
                document.getElementById('container-img').appendChild(lists[0]);
                let lists2 = document.querySelectorAll('.img-sub');
                lists2[0].classList.add('active');
                for(let i = 1; i <= 3; i++){
                    lists2[i].classList.remove('active');
                }
                let html = `
                <img src="${lists2[0].src}" alt="" class="img-description slide-1">
                `
                document.querySelector('.slider-main').innerHTML = html
        }
        preBtn.onclick = () => {
                let lists = document.querySelectorAll('.img-sub');
                document.getElementById('container-img').prepend(lists[3]);
                let lists2 = document.querySelectorAll('.img-sub');
                lists2[0].classList.add('active');
                for(let i = 1; i <= 3; i++){
                    lists2[i].classList.remove('active');
                }
                let html = `
                <img src="${lists2[0].src}" alt="" class="img-description slide-1">
                `
                document.querySelector('.slider-main').innerHTML = html
        }
    },
    render: function(){

// handle modal
        const itemBtns = $$('.home-product-item')
        const mainDes = $('.description-information')
        const slideImg = $('.slider')

        for(var itemBtn of itemBtns){
            itemBtn.onclick = (e) => {
                var closest = e.target.closest('.home-product-item');
                homeProduct.products.map(function(product){
                    if(product.productId == closest.getAttribute('value')){
                        activeDes.classList.add("active")
                        
                            if(product.img[0].ProductID == product.productId){
                                var htmls1 = `
                                <div class="slider-main">
                            <img src="access/img2/${product.img[0].ImagePath}" alt="" class="img-description slide-1">
                        </div>


                        <div class="slider-sub row">
                            <i class="fa-solid fa-angle-left icon-des pre-btn col c-1"></i>
                            <div id="container-img">
                            <img src="access/img2/${product.img[0].ImagePath}" alt="" class="img-sub col c-3">
                            <img src="access/img2/${product.img[1].ImagePath}" alt="" class="img-sub col c-3">
                            <img src="access/img2/${product.img[2].ImagePath}" alt="" class="img-sub col c-3">
                            <img src="access/img2/${product.img[3].ImagePath}" alt="" class="img-sub col c-3">
                            </div>
                            
                            <i class="fa-solid fa-angle-right icon-des next-btn col c-1"></i>
                        </div>

                            <section class="search-calendar flex">
                                <div class="calender">
                                    <header class="month flex">
                                        <div class="icon-pre icon-nav">
                                            <i class="fa-solid fa-angle-left"></i>
                                        </div>
                                        <div class="content">
                                            
                                        </div>
                                        <div class="icon-next icon-nav">
                                            <i class="fa-solid fa-angle-right"></i>
                                        </div>
                                    </header>
                            
                                    <article class="main-date">
                                        <section class="weekends flex">
                                            <div>Mo</div>
                                            <div>Tu </div>
                                            <div>We</div>
                                            <div>Th</div>
                                            <div>Fr</div>
                                            <div>Sa</div>
                                            <div>Su</div>
                                        </section>
                            
                                        <section class="days flex">
                                            
                                        </section>
                                    </article>
                                </div>
                                
                                <div class="note-color">
                                    <div class="note-item">
                                        <div class="booked box"></div>
                                        <div class="note-booked">Hết hàng</div>
                                    </div>
                                    <div class="note-item">
                                        <div class="not-booked box"></div>
                                        <div class="note-booked">Còn hàng</div>
                                    </div>
                                </div>
                                `
                                slideImg.innerHTML = htmls1;
                                // handle calendar
                                renderCalender();
                                document.querySelector('.icon-pre').addEventListener('click', () => {
                                    date.setMonth(date.getMonth() - 1);
                                    renderCalender();
                                  })
                                  
                                  document.querySelector('.icon-next').addEventListener('click', () => {
                                    date.setMonth(date.getMonth() + 1);
                                    renderCalender();
                                  })

                                description.handleSlider();

                            }
                        
                        
                        var htmls = `
                        <div class="close"><i class="fa-solid fa-rectangle-xmark"></i></div>
                        <h1 class="code-room">${product.Title}</h1>
                            <div class="information-room-detail">

                                <div class="infor-item">
                                    <div class="title-infor">
                                    Vật liệu
                                    </div>
    
                                    <div class="sub-title">
                                    ${product.Material}
                                    </div>
    
                                </div>
    
                                <div class="infor-item">
                                    <div class="title-infor">
                                        Kích thước
                                    </div>
    
                                    <div class="sub-title">
                                        -${product.Acreage}m2<br>
                                        -Mã: 3*110305
                                        -Category: ${product.TypeID}
                                        -Tag: ${product.Material}
                                    </div>
    
                                </div>

                                <div class="infor-item">
                                    <div class="title-infor">
                                        Bảo hành:
                                    </div>
    
                                    <div class="sub-title">
                                        + 12 tháng<br>
                                        + Sau thời gian hết hạn bảo hành, nếu quý khách có bất kỳ yêu cầu hay thắc mắc thì vui lòng liên hệ với Nhà Xinh để được hướng dẫn và giải quyết các vấn đề gặp phải.
                                    </div>
    
                                </div>
    
                                <div class="infor-item">
                                    <div class="title-infor">
                                        Vận chuyển:
                                    </div>
    
                                    <div class="sub-title">
                                    - GIAO HÀNG TẬN NƠI
                                    Nhà Xinh cung cấp dịch vụ giao hàng tận nơi, lắp ráp và sắp xếp vị trí theo đúng ý muốn của quý khách
                                    
                                    </div>
    
                                </div>
    
                                <div class="infor-item">
                                    <div class="title-infor">
                                        Mô tả<br>
                                    </div>
    
                                    <div class="sub-title">
                                        ${product.Des}
                                    </div>
    
                                </div>
    
                                <div class="infor-item">
                                    <div class="title-infor">
                                        Đánh giá:<br>
                                    </div>
    
                                    <div class="sub-title">
                                        
                                    </div>
                            </div>
                            <div class = "price-des">Giá sản phẩm: <span class ="price"> ${homeProduct.pricecur(product)} VNĐ</span></div>
                        </div>
                                
                        `
                        mainDes.innerHTML = htmls;             
                        cart.hadleCart(product,product.id);
                        const close = $('.close')
                        close.onclick = () => {
                            activeDes.classList.remove('active')
                        }
                    }
                })
            }
        }


    }
    }

    description.render();

    




    
</script>