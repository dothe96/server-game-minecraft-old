var Construct = function(data, container, craft, hdr, topContent, itemName, mainImage) {
    this.container = container[0];
    this.craft = craft[0];
    this.hrd = hdr[0];
    this.topContent = topContent[0];
    this.craft = craft[0];
    this.name = itemName[0];
    this.mainImage = mainImage[0];
    this.data = data;
    this.blocks = [];
    for (var key in data.input) {
        this.createBlock(data.input[key]);
    }
    this.decorateBlocks(this.blocks);
}

Construct.prototype.createBlock = function(el) {
    for (var key in el) {
        var current = el[key];
        var block = document.createElement('div'),
            h3 = document.createElement('h3'),
            ul = document.createElement('ul'),
            clear = document.createElement('div'),
            self = this;
        ul.className = 'items';
        clear.className = 'clear';
        
        for (var i in current) {
            var currentBlock = this.data.output[current[i]];
            if (currentBlock) {
                var li = document.createElement('li');
                li.name = currentBlock.name;
                li.craft  = currentBlock.craft;
                li.main  = currentBlock.main;
                li.offset = '0px -' + currentBlock.title_image + 'px';
                var normalStyle = '-' + currentBlock.icon_image.x + 'px -' + currentBlock.icon_image.y + 'px';
                    hoverStyle =  '-' + currentBlock.hover_image.x + 'px -' + currentBlock.hover_image.y + 'px';
                li.style.backgroundPosition = normalStyle;
                li.normalStyle = normalStyle;
                li.hoverStyle = hoverStyle;

                ul.appendChild(li);


		var offset = currentBlock.title_image;
                $(li).click(function(e) {
                    var el = e.target,
                        craftImg = new Image(),
                        mainImg = new Image(),
                        loadedCount = 0;
                    craftImg.loaded = false;
                    mainImg.loaded = false;


                    $(craftImg).bind('load', function() {
                        loadedCount++;
//                        console.log(loadedCount);
                        if (loadedCount == 2) {
                            $(self.topContent).fadeOut(125, function() {
                                self.updateTop(el.name, craftImg.src, mainImg.src, el.offset);
                            });
                        }
                    });

                    $(mainImg).bind('load', function() {
                        loadedCount++;
//                        console.log(loadedCount);
                        if (loadedCount == 2) {
                            $(self.topContent).fadeOut(125, function() {
                                self.updateTop(el.name, craftImg.src, mainImg.src, el.offset);
                            });
                        }
                    });

                    craftImg.src = 'http://minecraft-crafting.net/app/' + el.craft;
                    mainImg.src = 'http://minecraft-crafting.net/app/' + el.main;

                });
            }
        }
        h3.innerHTML = key;
        h3.style.backgroundImage = 'url("app/src/' + key + '/title.png")';
        block.appendChild(h3);
        block.appendChild(ul);
        block.appendChild(clear);
        this.container.appendChild(block);

        this.blocks.push(block);
    }
}

Construct.prototype.updateTop = function(name, craftSrc, mainSrc, offset) {
    this.hrd.style.display = 'none';
    // this.name.style.backgroundPosition = offset;
	this.name.innerHTML = name;
    this.craft.src = craftSrc;
    this.mainImage.src = mainSrc;
    $(this.topContent).fadeIn(125);
}

Construct.prototype.decorateBlocks = function(blocks) {
    for (var i = 0; i < blocks.length; i++) {
        if ((i + 1) % 2 == 0) {
            blocks[i].className = 'right';
        } else {
            blocks[i].className = 'left';
        }
    }
}